<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'hero-posts';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php
  $hero_image = get_field('small_image', $post_id);
?>

<div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?> <?php echo (!$hero_image) ? 'no-image' : ''; ?>" >
  <div class="date">
    <?php the_date(); ?>
  </div>
  <h1><?php the_title(); ?></h1>
  <?php if ($hero_image): ?>
    <div class="image">
      <div><img class="hero-posts-image" src="<?php echo esc_url($hero_image['url']); ?>" alt=<?php echo esc_attr($hero_image['alt']); ?>></div>
    </div>
  <?php endif ?>  
</div>