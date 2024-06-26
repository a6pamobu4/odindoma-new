<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'table-3-cols';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $heading = get_field('heading');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if ($heading) : ?>
      <p class="heading"><?php echo esc_html($heading); ?></p>
    <?php endif; ?>

    <?php if (have_rows('rows')) : ?>
      <div class="rows">
        <?php while (have_rows('rows')) : the_row(); 
        $text_left    = get_sub_field('text_left');
        $text_center  = get_sub_field('text_center');
        $text_right   = get_sub_field('text_right'); ?>
          <div class="row">
            <?php if($text_left) : ?>
              <div class="text-left">
                <?php echo esc_html($text_left); ?>
              </div>
            <?php endif; ?>
            <?php if($text_center) : ?>
              <div class="text-center">
                <?php echo esc_html($text_center); ?>
              </div>
            <?php endif; ?>
            <?php if($text_right) : ?>
              <div class="text-right">
                <?php echo esc_html($text_right); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>