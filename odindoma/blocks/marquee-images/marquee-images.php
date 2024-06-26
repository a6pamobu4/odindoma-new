<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'marquee-images';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $images         = get_field('images');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <div class="marquee-images-container">
      <div class="marquee-images-inner" role="marquee">
        <?php if($images) : ?>
          <div class="images">
            <?php foreach( $images as $index => $images_id ): ?>
              <div class="image">
                <img class="no-lazy" src="<?php echo esc_url($images_id['url']); ?>" alt="<?php echo esc_html($images_id['alt']); ?>">
              </div>          
            <?php endforeach; ?>
          </div>
          <div class="images">
            <?php foreach( $images as $index => $images_id ): ?>
              <div class="image">
                <img class="no-lazy" src="<?php echo esc_url($images_id['url']); ?>" alt="<?php echo esc_html($images_id['alt']); ?>">
              </div>          
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>