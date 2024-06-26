<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'note-spots';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $heading        = get_field('heading');
  $heading_emoji  = get_field('heading_emoji');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if ($heading) : ?>
      <p class="heading">
        <?php if($heading_emoji) : ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/emoji-<?php echo esc_html($heading_emoji); ?>.png" alt="Emoji mark">
        <?php endif; ?>
        <?php echo esc_html($heading); ?>
      </p>
    <?php endif; ?>

    <?php if (have_rows('rows')) : ?>
      <div class="rows">
        <?php while (have_rows('rows')) : the_row(); 
        $text_left  = get_sub_field('text_left');
        $gray       = get_sub_field('gray');
        $emoji      = get_sub_field('emoji');
        $text_right = get_sub_field('text_right'); ?>
          <div class="row">
            <?php if($text_left) : ?>
              <div class="text-left <?php echo ($gray) ? 'gray' : ''; ?>">
                <span><?php echo esc_html($text_left); ?></span>
                <?php if($emoji) : ?>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/emoji-<?php echo esc_html($emoji); ?>.png" alt="Emoji mark">
                <?php endif; ?>
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