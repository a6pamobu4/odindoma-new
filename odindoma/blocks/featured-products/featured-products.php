<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'featured-products-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $heading              = get_field('heading');
  $featured_products    = get_field('featured_products');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if ($heading) : ?>
      <p class="heading"><?php echo esc_html($heading); ?></p>
    <?php endif; ?>

    <?php if ($featured_products): ?>
      <div class="swiper">
        <div class="featured-products swiper-wrapper">
          <?php foreach($featured_products as $featured_product):
            $name                   = get_field('name', $featured_product->ID);
            $title                  = get_field('title', $featured_product->ID);
            $subtitle               = get_field('subtitle', $featured_product->ID);
            $image                  = get_field('image', $featured_product->ID);
            $our_price              = get_field('our_price', $featured_product->ID);
            $parent_post            = get_field('parent_post', $featured_product->ID);
            $stores                 = get_field('stores', $featured_product->ID);
            if ($parent_post) {
              $parent_post_permalink = get_permalink($parent_post->ID);
            }
            else {
              $parent_post_permalink = null;
            }
            ?>
            <div class="featured-product swiper-slide">
              <?php if ($image || $title || $subtitle) : ?>
                <div class="text-image">
                  <?php if ($image) : ?>
                    <div class="image">
                      <?php if ($parent_post_permalink) : ?><a href="<?php echo esc_url($parent_post_permalink); ?>"><?php endif; ?>
                      <img class="back" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bag-100-new.png" alt="Bag back">
                      <img class="product" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                      <img class="front" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bag-70.png" alt="Bag front">
                      <?php if ($parent_post_permalink) : ?></a><?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <?php if ($title || $subtitle) : ?>
                    <div class="text">
                      <?php if ($title) : ?>                     
                        <p class="title">
                          <?php if ($parent_post_permalink) : ?><a href="<?php echo esc_url($parent_post_permalink); ?>"><?php endif; ?>
                            <?php echo esc_html($title); ?><img class="chain" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/emoji-chain.png" alt="Link">
                          <?php if ($parent_post_permalink) : ?></a><?php endif; ?>
                        </p>
                      <?php endif; ?>
                      <?php if ($subtitle) : ?>
                        <p class="subtitle"><?php echo esc_html($subtitle); ?></p>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                </div>                      
              <?php endif; ?>
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
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>