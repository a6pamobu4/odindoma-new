<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'product-image';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $product        = get_field('product');
  $title          = get_field('title');
  $subtitle       = get_field('subtitle');
  $caption        = get_field('caption');
  $image_right    = get_field('image_right');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if ($product) : 
    $name               = get_field('name', $product->ID);
    $image              = get_field('image', $product->ID);
    $title_grid         = get_field('title', $product->ID);
    $subtitle_grid      = get_field('subtitle', $product->ID);
    $our_price          = get_field('our_price', $product->ID);
    $stores             = get_field('stores', $product->ID);
    ?>
      <div class="product-info">
        <div class="top">
          <div class="left">
            <?php if ($image) : ?>
              <div class="image">
                <img class="back" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bag-100-new.png" alt="Bag back">
                <img class="product" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <img class="front" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bag-70.png" alt="Bag front">
              </div>
            <?php endif; ?>
          </div>
          <div class="right">
            <?php if ($title) : ?>
              <p class="title"><?php echo esc_html($title); ?></p>
            <?php else : ?>
              <p class="title"><?php echo esc_html($title_grid); ?></p>
            <?php endif; ?>
            <?php if ($subtitle) : ?>
              <p class="subtitle"><?php echo esc_html($subtitle); ?></p>
            <?php else : ?>
              <p class="subtitle"><?php echo esc_html($subtitle_grid); ?></p>
            <?php endif; ?>            
          </div>
        </div>
        <div class="bottom">
          <?php if ($name) : ?>
            <p class="name"><?php echo esc_html($name); ?></p>
          <?php endif; ?>
          <?php if ($our_price && $stores) : ?>
            <div class="prices">                  
              <div class="price">
                <div class="logos">
                  <?php foreach($stores as $store) :
                  $store_logo   = get_field('store_logo', $store->ID); 
                  ?>
                    <img class="logo" src="<?php echo esc_url($store_logo['url']); ?>" alt="<?php echo esc_attr($store_logo['alt']); ?>">
                  <?php endforeach; ?>
                </div>
                <span>мы купили за <?php echo esc_html($our_price); ?> ₽</span>
              </div>                                
            </div>
          <?php endif; ?>
          <?php if ($caption) : ?>
            <p class="caption"><?php echo esc_html($caption); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="image-right-container">
        <?php if($image_right) : ?>
          <img class="image-right" src="<?php echo esc_url($image_right['url']); ?>" alt="<?php echo esc_html($image_right['alt']); ?>">
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>