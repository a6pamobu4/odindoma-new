<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'custom-posts-grid';
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

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if ($heading) : ?>
      <p class="heading"><?php echo esc_html($heading); ?></p>
    <?php endif; ?>
    <?php if ($custom_posts): ?>
      <div class="posts cols-<?php echo esc_html($columns); ?>">
        <?php foreach($custom_posts as $custom_post): 
          $permalink          = get_permalink( $custom_post->ID );
          $title              = get_field('title', $custom_post->ID);
          $subtitle           = get_field('subtitle', $custom_post->ID);
          $main_image         = get_field('main_image', $custom_post->ID);
          $title_hover_color  = get_field('title_hover_color', $custom_post->ID);
          ?>
          <div class="post <?php echo esc_html($title_hover_color); ?>">
            <?php if ($main_image) : ?>
              <div class="image">
                <a href="<?php echo esc_url($permalink); ?>">
                  <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>">
                </a>
              </div>     
            <?php endif; ?>
            <?php if ($title) : ?>
              <h2>
                <a class="title" href="<?php echo esc_url($permalink); ?>"><?php echo esc_html( $title ); ?></a>
              </h2>
            <?php endif; ?>
            <?php if ($subtitle) : ?>              
              <p class="subtitle"><?php echo esc_html( $subtitle ); ?></p>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>