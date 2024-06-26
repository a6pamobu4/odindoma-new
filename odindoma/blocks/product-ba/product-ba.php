<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'product-ba';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $product    = get_field('product');
  $title      = get_field('title');
  $caption    = get_field('caption');
  $before     = get_field('before');
  $after      = get_field('after');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if ($product) : 
    $name               = get_field('name', $product->ID);
    $image              = get_field('image', $product->ID);
    $title_grid         = get_field('title', $product->ID);
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
            <?php if (have_rows('grid')) : ?>
              <div class="grid">
                <?php while (have_rows('grid')) : the_row(); 
                $text  = get_sub_field('text');
                $type  = get_sub_field('type');
                ?>
                  <?php if($text) : ?>
                    <div class="text <?php echo esc_html($type); ?>">
                      <span><?php echo esc_html($text); ?></span>
                      <?php if($type == 'rec') : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/emoji-checkmark.png" alt="Emoji checkmark">
                      <?php elseif($type == 'fail') : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/emoji-prohibited.png" alt="Emoji prohibited">
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                <?php endwhile; ?>
              </div>
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
      <div class="before-after">
        <?php if($before) : ?>
          <img class="before" src="<?php echo esc_url($before['url']); ?>" alt="<?php echo esc_html($before['alt']); ?>">
        <?php endif; ?>
        <?php if($after) : ?>
          <div class="after" style="background-image:url(<?php echo esc_url($after['url']); ?>);"></div>
        <?php endif; ?>
        <input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider">
        <div class='slider-button'></div>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>