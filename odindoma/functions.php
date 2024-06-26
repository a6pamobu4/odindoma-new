<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package odindoma
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function odindoma_styles() {
	wp_enqueue_style(
		'odindoma-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
  wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', ['jquery']);
}
add_action( 'wp_enqueue_scripts', 'odindoma_styles' );

/**
 * SVG support
 * */
add_filter( 'upload_mimes', 'svg_upload_allow' );
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

/**
 * Register block scripts
 */
function odindoma_register_block_script() {
	wp_register_script( 'block-all-posts', get_template_directory_uri() . '/blocks/all-posts/all-posts.js', [ 'jquery', 'acf' ] );
	wp_register_script( 'block-featured-products', get_template_directory_uri() . '/blocks/featured-products/featured-products.js', [ 'jquery', 'acf' ] );
	wp_register_script( 'swiper', get_template_directory_uri() . '/assets/lib/swiper/swiper-bundle.min.js', [ 'jquery' ] );
	wp_register_script( 'block-product-ba', get_template_directory_uri() . '/blocks/product-ba/product-ba.js', [ 'jquery', 'acf' ] );
	wp_register_script( 'block-post-nav', get_template_directory_uri() . '/blocks/post-nav/post-nav.js', [ 'jquery', 'acf' ] );
  wp_register_script( 'block-marquee-text', get_template_directory_uri() . '/blocks/marquee-text/marquee-text.js', [ 'jquery', 'acf' ] );
  wp_register_script( 'block-marquee-images', get_template_directory_uri() . '/blocks/marquee-images/marquee-images.js', [ 'jquery', 'acf' ] );
  wp_register_script( 'block-gallery-ba', get_template_directory_uri() . '/blocks/gallery-ba/gallery-ba.js', [ 'jquery', 'acf' ] );
  wp_register_script( 'block-gallery', get_template_directory_uri() . '/blocks/gallery/gallery.js', [ 'jquery', 'acf' ] );
  wp_register_script( 'block-footer', get_template_directory_uri() . '/blocks/footer/footer.js', [ 'jquery', 'acf' ] );
  wp_register_script( 'block-quote', get_template_directory_uri() . '/blocks/quote/quote.js', [ 'jquery', 'acf' ] );
  wp_register_script( 'block-product-grid', get_template_directory_uri() . '/blocks/product-grid/product-grid.js', [ 'jquery', 'acf' ] );
  wp_register_script( 'block-wysiwyg', get_template_directory_uri() . '/blocks/wysiwyg/wysiwyg.js', [ 'jquery', 'acf' ] );
  wp_register_script( 'block-images-grid', get_template_directory_uri() . '/blocks/images-grid/images-grid.js', [ 'jquery', 'acf' ] );
  wp_register_script( 'block-interval', get_template_directory_uri() . '/blocks/interval/interval.js', [ 'jquery', 'acf' ] );
  //wp_register_script( 'jquery-ui', get_template_directory_uri() . '/blocks/arkanoid/jquery-ui.min.js', [ 'jquery', 'acf' ] );
  //wp_register_script( 'block-arkanoid', get_template_directory_uri() . '/blocks/arkanoid/arkanoid.js', [ 'jquery', 'acf' ] );
}

add_action( 'init', 'odindoma_register_block_script' );
//add_filter( 'should_load_separate_core_block_assets', '__return_true' );

/**
 * Register ACF blocks
 * */

function odindoma_register_acf_blocks() {
	register_block_type( __DIR__ . '/blocks/header' );
	register_block_type( __DIR__ . '/blocks/footer' );
  register_block_type( __DIR__ . '/blocks/hero-home' );
  register_block_type( __DIR__ . '/blocks/latest-posts' );
  register_block_type( __DIR__ . '/blocks/all-posts' );
  register_block_type( __DIR__ . '/blocks/featured-products' );
  register_block_type( __DIR__ . '/blocks/hero-posts' );
  register_block_type( __DIR__ . '/blocks/note-spots' );
  register_block_type( __DIR__ . '/blocks/product-ba' );
  register_block_type( __DIR__ . '/blocks/image-list' );
  register_block_type( __DIR__ . '/blocks/product-image' );
  register_block_type( __DIR__ . '/blocks/post-nav' );
  register_block_type( __DIR__ . '/blocks/quote' );
  register_block_type( __DIR__ . '/blocks/table-3-cols' );
  register_block_type( __DIR__ . '/blocks/custom-posts-grid' );
  register_block_type( __DIR__ . '/blocks/marquee-text' );
  register_block_type( __DIR__ . '/blocks/marquee-images' );
  register_block_type( __DIR__ . '/blocks/gallery-ba' );
  register_block_type( __DIR__ . '/blocks/gallery' );
  //register_block_type( __DIR__ . '/blocks/arkanoid' );
  register_block_type( __DIR__ . '/blocks/product-grid' );
  register_block_type( __DIR__ . '/blocks/wysiwyg' );
  register_block_type( __DIR__ . '/blocks/images-grid' );
  register_block_type( __DIR__ . '/blocks/interval' );
  register_block_type( __DIR__ . '/blocks/separator' );
}
add_action( 'init', 'odindoma_register_acf_blocks' );

add_theme_support( 'editor-styles' );
add_editor_style( 'style-editor.css' );

//remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

add_action( 'wp_enqueue_scripts', function() {
  // https://github.com/WordPress/gutenberg/issues/36834
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );

  // https://stackoverflow.com/a/74341697/278272
  wp_dequeue_style( 'classic-theme-styles' );

  // Or, go deep: https://fullsiteediting.com/lessons/how-to-remove-default-block-styles
} );

add_filter( 'should_load_separate_core_block_assets', '__return_true' );


/**
 * Register CPT
 * */

function custom_post_type() {

  $labels = array(
    'name'                => _x( 'Товары', 'Post Type General Name', 'odindoma' ),
    'singular_name'       => _x( 'Товар', 'Post Type Singular Name', 'odindoma' ),
    'menu_name'           => __( 'Товары', 'odindoma' ),
    'parent_item_colon'   => __( 'Родительский Товар', 'odindoma' ),
    'all_items'           => __( 'Все Товары', 'odindoma' ),
    'view_item'           => __( 'Посмотреть Товар', 'odindoma' ),
    'add_new_item'        => __( 'Добавить Новый Товар', 'odindoma' ),
    'add_new'             => __( 'Добавить Новый', 'odindoma' ),
    'edit_item'           => __( 'Редактировать Товар', 'odindoma' ),
    'update_item'         => __( 'Обновить Товар', 'odindoma' ),
    'search_items'        => __( 'Найти Товар', 'odindoma' ),
    'not_found'           => __( 'Не найдено', 'odindoma' ),
    'not_found_in_trash'  => __( 'Не найдено в Корзине', 'odindoma' ),
  );
      
  $args = array(
    'label'               => __( 'products', 'odindoma' ),
    'description'         => __( 'Инфо о товарах', 'odindoma' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'author', 'thumbnail', 'revisions', 'custom-fields' ), 
    'taxonomies'          => array( 'articles' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => false,
    'capability_type'     => 'post',
    'show_in_rest' 				=> true,

  );
  register_post_type( 'products', $args );  
}  
add_action( 'init', 'custom_post_type', 0 );

function custom_post_type_store() {

  $labels = array(
    'name'                => _x( 'Магазины', 'Post Type General Name', 'odindoma' ),
    'singular_name'       => _x( 'Магазин', 'Post Type Singular Name', 'odindoma' ),
    'menu_name'           => __( 'Магазины', 'odindoma' ),
    'parent_item_colon'   => __( 'Родительский Магазин', 'odindoma' ),
    'all_items'           => __( 'Все Магазины', 'odindoma' ),
    'view_item'           => __( 'Посмотреть Магазин', 'odindoma' ),
    'add_new_item'        => __( 'Добавить Новый Магазин', 'odindoma' ),
    'add_new'             => __( 'Добавить Новый', 'odindoma' ),
    'edit_item'           => __( 'Редактировать Магазин', 'odindoma' ),
    'update_item'         => __( 'Обновить Магазин', 'odindoma' ),
    'search_items'        => __( 'Найти Магазин', 'odindoma' ),
    'not_found'           => __( 'Не найдено', 'odindoma' ),
    'not_found_in_trash'  => __( 'Не найдено в Корзине', 'odindoma' ),
  );
      
  $args = array(
    'label'               => __( 'store', 'odindoma' ),
    'description'         => __( 'Инфо о магазине', 'odindoma' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'author', 'thumbnail', 'revisions', 'custom-fields' ), 
    'taxonomies'          => array( 'articles' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 6,
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => false,
    'capability_type'     => 'post',
    'show_in_rest' 				=> true,

  );
  register_post_type( 'store', $args );  
}  
add_action( 'init', 'custom_post_type_store', 0 );

/**
 * Menu support
 * */

add_theme_support( 'menus' );

function odindoma_menus() {
    register_nav_menus(
      array(
        'main-menu' => _( 'Main menu' ),
        'secondary' => _('Secondary menu')
      )
    );
}
add_action( 'init', 'odindoma_menus' );


/**
 * Load more posts
 * */

function all_posts_load_more() {

	$ajaxposts = get_posts(array(
    'posts_per_page'    => 4,
    'post_type'     => 'post',
    'orderby' => 'date',
    'status' => 'publish',
    'order' => 'DESC',
    'paged' => $_POST['paged']
  ));

  $response = '';

  if( $ajaxposts ) :
  	       
    foreach( $ajaxposts as $post ) :             
      setup_postdata( $post );
      $permalink          = get_permalink( $post->ID );
      $title              = get_field('title', $post->ID);
      $subtitle           = get_field('subtitle', $post->ID);
      $main_image         = get_field('main_image', $post->ID);
      $title_hover_color  = get_field('title_hover_color', $post->ID);
      
      $response .= '<div class="post">';
        if ($main_image) : 
          $response .= '<div class="image"><a href="'; 
          $response .= esc_url($permalink); 
          $response .= '"><img src="';  
          $response .= esc_url($main_image['url']); 
          $response .= '" alt="'; 
          $response .= esc_attr($main_image['alt']); 
          $response .= '"></a></div>';
        endif;
        if ($title) : 
          $response .= '<h2><a class="title '; 
          $response .= esc_html($title_hover_color); 
          $response .= '" href="'; 
          $response .= esc_url($permalink); 
          $response .= '">'; 
          $response .= esc_html( $title ); 
          $response .= '</a></h2>';
        endif; 
        if ($subtitle) :               
          $response .= '<p class="subtitle">'; 
          $response .= esc_html( $subtitle ); 
          $response .= '</p>';
        endif; 
      $response .='</div>';       
    endforeach;

   endif;

  echo $response;
  exit;
}
add_action('wp_ajax_all_posts_load_more', 'all_posts_load_more');
add_action('wp_ajax_nopriv_all_posts_load_more', 'all_posts_load_more');
 
/**
 * <head> scripts
 * */
function scripts_to_head(){
?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KZMRRSCZ');</script>
<!-- End Google Tag Manager -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3082R2X8CF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3082R2X8CF');
</script>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '371419555270580');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=371419555270580&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<!-- VK -->
<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("VK-RTRG-1827516-dcmqc"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1827516-dcmqc" style="position:fixed; left:-999px;" alt=""/></noscript>
<!-- End VK -->
<?php 
  if (is_page("telegram")) :
?>
<!-- Telegram LP -->
<script src="https://api.tgtrack.ru/API/landing_script/v1/?linkID=81cebdbe1c1c&chat=odindomamedia&type=ya&counterID=96967119&onClickGoal=toTelegram" type="text/javascript" defer></script>
<!-- End Telegram LP -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(96967119, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/96967119" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php else : ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(95640841, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/95640841" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php endif; ?>
<?php
}
add_action( 'wp_head', 'scripts_to_head' );

/**
 * <body> scripts
 * */
function scripts_to_body(){
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZMRRSCZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
add_action( 'wp_body_open', 'scripts_to_body' );

/**
 * Rank Math meta data
 * */

function get_rank_math_meta_title() {
  return RankMath\Post::get_meta( 'title' );
}

function get_rank_math_meta_description() {
    return RankMath\Post::get_meta( 'description' );
}