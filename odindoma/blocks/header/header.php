<?php
$logo             = get_field('logo', 'option');
$social_text      = get_field('social_text', 'option');
?>

<div class="logo">
  <?php if ($logo) : ?>
    <a href="/" aria-label="Home"><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>"></a>
  <?php endif ?>
  <?php 
    wp_nav_menu( 
      array( 
        'theme_location' => 'main-menu',
        'menu_class' => 'main-menu',
        'container_class' => 'mobile-main-menu-container'
      ) 
    ); 
  ?>
</div>

<div class="social-buttons">
  <?php if ($social_text) : ?>
    <div class="text">
      <?php echo $social_text; ?>
    </div>
  <?php endif; ?>
  <?php 
    wp_nav_menu( 
      array( 
        'theme_location' => 'main-menu',
        'menu_class' => 'main-menu',
        'container_class' => 'main-menu-container'
      ) 
    ); 
  ?>
  <?php if(have_rows('social_buttons_repeater', 'option')) : ?>
    <div class="buttons">
      <?php while(have_rows('social_buttons_repeater', 'option')) : the_row(); 
        $social_image         = get_sub_field('social_image');
        $social_link          = get_sub_field('social_link'); ?>
        <a href="<?php echo esc_url( $social_link ); ?>" target="_blank" aria-label="Social link"><img src="<?php echo esc_url( $social_image['url'] ); ?>" alt="<?php echo esc_attr( $social_image['alt'] ); ?>"></a>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>

  