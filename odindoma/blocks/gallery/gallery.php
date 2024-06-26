<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'gallery';
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
  $show_captions  = get_field('show_captions');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if($images) : ?>
      <div class="images">
        <?php foreach( $images as $index => $images_id ): ?>
          <div class="image image-<?php echo $index; ?>">
            <img src="<?php echo esc_url($images_id['url']); ?>" alt="<?php echo esc_html($images_id['alt']); ?>">
          </div>          
        <?php endforeach; ?>        
        <div class="nav">
          <?php foreach( $images as $index => $images_id ): ?>
            <div class="nav-item nav-item-<?php echo $index; ?>"></div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php if ($show_captions) : ?>
        <div class="captions">
          <?php foreach( $images as $index => $images_id ): ?>
            <p class="caption caption-<?php echo $index; ?>"><?php echo esc_html($images_id['caption']); ?></p>      
          <?php endforeach; ?>
        </div>        
      <?php endif; ?>      
    <?php endif; ?>
  </div>
<?php endif; ?>