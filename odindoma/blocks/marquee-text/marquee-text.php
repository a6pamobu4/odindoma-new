<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'marquee-text';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (get_field('add_marquee_text', $post_id)) : ?>

  <?php
  $marquee_text = get_field('marquee_text', $post_id);
  $marquee_link = get_field('marquee_link', $post_id);
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <div class="scrolling-text-container">
      <a href="<?php echo esc_url($marquee_link); ?>" class="scrolling-text-inner" role="marquee">
        <div class="scrolling-text">
          <div class="scrolling-text-item"><?php echo $marquee_text; ?></div>
        </div>
        <div class="scrolling-text">
          <div class="scrolling-text-item"><?php echo $marquee_text; ?></div>
        </div>
        <div class="scrolling-text">
          <div class="scrolling-text-item"><?php echo $marquee_text; ?></div>
        </div>
      </a>
  </div>
  </div>
<?php endif; ?>