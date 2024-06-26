<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'product-grid';
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
  $products         = get_field('products');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if ($products): ?>
      <div class="products cols-<?php echo esc_html($columns); ?>">
        <?php foreach($products as $product): 
          $name               = get_field('name', $product->ID);
          $image              = get_field('image', $product->ID);
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
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>