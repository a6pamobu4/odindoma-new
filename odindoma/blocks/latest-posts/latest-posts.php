<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'latest-posts';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $heading          = get_field('heading');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <?php if ($heading) : ?>
      <p class="heading"><?php echo esc_html($heading); ?></p>
    <?php endif; ?>

    <?php 

    $posts = get_posts(array(
      'posts_per_page'    => 15,
      'post_type'     => 'post',
      'orderby' => 'date',
      'status' => 'publish',
      'order' => 'DESC'
    )); ?>

    <?php if( $posts ): ?>        
      <div class="posts">          
        <?php foreach( $posts as $post ):             
          setup_postdata( $post );
          $permalink          = get_permalink( $post->ID );
          $title              = get_field('title', $post->ID);
          $subtitle           = get_field('subtitle', $post->ID);
          $main_image         = get_field('main_image', $post->ID);
          $title_hover_color  = get_field('title_hover_color', $post->ID);
          ?>
          <div class="post <?php echo esc_html($title_hover_color); ?>">
            <?php if ($main_image) : ?>
              <div class="image">
                <a href="<?php echo esc_url($permalink); ?>" aria-label="<?php echo esc_html( $title ); ?>">
                  <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>">
                </a>
              </div>     
            <?php endif; ?>
            <?php if ($title) : ?>
              <h2>
                <a class="title" href="<?php echo esc_url($permalink); ?>" aria-label="<?php echo esc_html( $title ); ?>"><?php echo esc_html( $title ); ?></a>
              </h2>
            <?php endif; ?>
            <?php if ($subtitle) : ?>              
              <p class="subtitle"><?php echo esc_html( $subtitle ); ?></p>
            <?php endif; ?>
          </div>        
        <?php endforeach; ?>      
      </div>      
      <?php wp_reset_postdata(); ?>

    <?php endif; ?>
  </div>
<?php endif; ?>