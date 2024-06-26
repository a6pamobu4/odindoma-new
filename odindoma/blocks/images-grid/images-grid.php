<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'images-grid';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $columns          = get_field('columns');
  $heading          = get_field('heading');
  $custom_posts     = get_field('custom_posts');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?> cols-<?php echo esc_html($columns); ?>" >
    <?php if (have_rows('items')) : ?>
      <?php while (have_rows('items')) : the_row(); 
      $image      = get_sub_field('image');
      $caption    = get_sub_field('caption');
      ?>
        <div class="item">
          <?php if ($image) : ?>
            <div class="image">
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_html($image['alt']); ?>">
            </div>            
          <?php endif; ?>
          <?php if ($caption) : ?>
            <div class="caption">
              <?php echo esc_html($caption); ?>
            </div>            
          <?php endif; ?>  
        </div>                    
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
<?php endif; ?>