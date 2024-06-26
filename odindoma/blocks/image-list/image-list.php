<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'image-list';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $main_image     = get_field('main_image');
  $caption        = get_field('caption');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if ($main_image) : ?>
      <div class="left">
        <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_html($main_image['alt']); ?>">
      </div>
    <?php endif; ?>
    <?php if (have_rows('list')) : ?>
      <div class="right">
        <div class="list">
          <?php while (have_rows('list')) : the_row(); 
          $text   = get_sub_field('text');
          $image  = get_sub_field('image');
          $price  = get_sub_field('price');
          ?>
            <?php if ($text) : ?>
              <div class="item">
                <div class="start">
                  <?php if ($image) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_html($image['alt']); ?>">
                  <?php endif; ?>
                  <?php if ($text) : ?>
                    <span class="text"><?php echo esc_html($text); ?></span>
                  <?php endif; ?>
                </div>
                <?php if ($price) : ?>
                  <div class="end"><span><?php echo esc_html($price); ?></span><span> ₽</span></div>
                <?php endif; ?>
              </div>              
            <?php endif; ?>            
          <?php endwhile; ?>
        </div>
        <?php if ($caption) : ?>
          <p class="caption"><?php echo esc_html($caption); ?></p>
        <?php endif ?>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>