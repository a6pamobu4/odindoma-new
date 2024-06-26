<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'hero';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $featured_post          = get_field('featured_post');
  $title_feat             = get_field('title', $featured_post->ID);
  $main_image_feat        = get_field('main_image', $featured_post->ID);
  $title_hover_color_feat = get_field('title_hover_color', $featured_post->ID);
  $permalink_feat         = get_permalink( $featured_post->ID );
  $popular_posts          = get_field('popular_posts');
  $heading_pop            = get_field('heading_pop');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if( $featured_post ): ?>
      <div class="featured-post <?php echo esc_html($title_hover_color_feat); ?>">
        <?php if ($main_image_feat) : ?>
          <div class="image">
            <a href="<?php echo esc_url($permalink_feat); ?>" aria-label="<?php echo esc_html( $title_feat ); ?>">
              <img src="<?php echo esc_url($main_image_feat['url']); ?>" alt="<?php echo esc_attr($main_image_feat['alt']); ?>">
            </a>
          </div>        
        <?php endif; ?>
        <?php if ($title_feat) : ?>
          <h1 class="title">
            <a href="<?php echo esc_url($permalink_feat); ?>" aria-label="<?php echo esc_html( $title_feat ); ?>"><?php echo esc_html( $title_feat ); ?></a>
          </h1>
        <?php endif; ?>
      </div>      
    <?php endif; ?>
    <?php if ($popular_posts): ?>
      <div class="popular-posts">
        <?php if ($heading_pop) : ?>
          <p class="heading-pop"><?php echo esc_html($heading_pop); ?></p>
        <?php endif; ?>
        <div class="posts">
          <?php foreach($popular_posts as $popular_post): 
            $permalink_pop          = get_permalink( $popular_post->ID );
            $title_pop              = get_field('title', $popular_post->ID);
            $main_image_pop         = get_field('main_image', $popular_post->ID);
            $small_image_pop        = get_field('small_image', $popular_post->ID);
            $title_hover_color_pop  = get_field('title_hover_color', $popular_post->ID);
            ?>
            <div class="popular-post <?php echo esc_html($title_hover_color_pop); ?>">
              <?php if ($main_image_pop) : ?>
                <div class="image">
                  <a href="<?php echo esc_url($permalink_pop); ?>" aria-label="<?php echo esc_html( $title_pop ); ?>">
                    <img src="<?php echo esc_url($main_image_pop['url']); ?>" alt="<?php echo esc_attr($main_image_pop['alt']); ?>">
                  </a>
                </div>        
              <?php endif; ?>
              <?php if ($small_image_pop) : ?>
                <div class="small-image">
                  <a href="<?php echo esc_url($permalink_pop); ?>" aria-label="<?php echo esc_html( $title_pop ); ?>">
                    <img src="<?php echo esc_url($small_image_pop['url']); ?>" alt="<?php echo esc_attr($small_image_pop['alt']); ?>">
                  </a>
                </div>        
              <?php endif; ?>
              <?php if ($title_pop) : ?>
                <a class="title" href="<?php echo esc_url( $permalink_pop ); ?>" aria-label="<?php echo esc_html( $title_pop ); ?>"><?php echo esc_html( $title_pop ); ?></a>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>