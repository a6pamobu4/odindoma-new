<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'post-nav';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if (have_rows('nav_items')) : ?>
      <div class="container">
        <ul class="nav-items">
          <?php while (have_rows('nav_items')) : the_row(); 
          $text   = get_sub_field('text');
          $link   = get_sub_field('link');
          ?>
            <?php if ($text && $link) : ?>
              <li class="nav-item" data-link="<?php echo esc_html($link); ?>">
                <?php echo esc_html($text); ?>
              </li>            
            <?php endif; ?>            
          <?php endwhile; ?>
        </ul>
      </div>
      <div class="underline"></div>
      <div class="mask-left"></div>
      <div class="mask-right"></div>
    <?php endif; ?>
  </div>
<?php endif; ?>