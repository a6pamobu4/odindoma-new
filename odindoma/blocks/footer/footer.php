<?php
$privacy_policy     = get_field('privacy_policy', 'option');
$copyright          = get_field('copyright', 'option');
$show_share_buttons = get_field('show_share_buttons', 'option');
?>

<?php if (($show_share_buttons && get_post_type() == 'post') || ($show_share_buttons && is_page('kto-my-takie-i-pochemu-nam-mozhno-verit')) || ($show_share_buttons && is_page('partnyoram')) || ($show_share_buttons && is_page('vakansii'))) : ?>
  <?php
  if (is_page()) {
    $share_buttons_text = 'Поделиться страницей:';
  }
  else {
    $share_buttons_text = get_field('share_buttons_text', 'option');
  }
  
  $telegram           = get_field('telegram', 'option');
  $vk                 = get_field('vk', 'option');
  $twitter            = get_field('twitter', 'option');
  $pinterest          = get_field('pinterest', 'option');
  $telegram_text      = get_field('telegram_text', 'option');
  $vk_text            = get_field('vk_text', 'option');
  $twitter_text       = get_field('twitter_text', 'option');
  $pinterest_text     = get_field('pinterest_text', 'option');
  ?>
  <div class="share-buttons">
    <div class="heading">
      <?php echo $share_buttons_text; ?>
    </div>
    <div class="buttons">
      <?php if ($telegram) : ?>
        <a class="telegram" href="https://t.me/share/url?url=<?php rawurlencode(the_permalink()); ?>" target="_blank"><?php echo esc_html($telegram_text); ?></a>
      <?php endif; ?>
      <?php if ($vk) : ?>
        <a class="vk" href="https://vk.com/share.php?url=<?php rawurlencode(the_permalink()); ?>" target="_blank"><?php echo esc_html($vk_text); ?></a>
      <?php endif; ?>
      <?php if ($twitter) : ?>
        <a class="twitter" href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode(get_rank_math_meta_title()); ?>&url=<?php rawurlencode(the_permalink()); ?>" target="_blank"><?php echo esc_html($twitter_text); ?></a>
      <?php endif; ?>
      <?php if ($pinterest) : ?>
        <a class="pinterest" href="https://pinterest.com/pin/create/button/?url=<?php rawurlencode(the_permalink()); ?>&description=<?php echo rawurlencode(get_rank_math_meta_title()); ?>" target="_blank"><?php echo esc_html($pinterest_text); ?></a>
      <?php endif; ?>
    </div>    
  </div>
<?php endif; ?>

<div class="social-buttons">
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

<div class="copyright">
  <?php if ($privacy_policy) : ?>
    <a class="policy" href="<?php echo esc_url( $privacy_policy['url'] ); ?>" aria-label="<?php echo esc_html( $privacy_policy['title'] ); ?>"><?php echo esc_html( $privacy_policy['title'] ); ?></a>
  <?php endif ?>
  <?php if ($copyright) : ?>
    <p class="copy"><?php echo esc_html( $copyright ); ?> <?php echo esc_html( date('Y') ); ?></p>
  <?php endif ?>
</div>

  