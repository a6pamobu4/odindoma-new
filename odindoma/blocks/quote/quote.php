<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'quote';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $face_image         = get_field('face_image');
  $author             = get_field('author');
  $quote_text         = get_field('quote_text');
  $additional_image   = get_field('additional_image');
  $add_poll           = get_field('add_poll');
  $poll_id            = get_field('poll_id');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >
    <div class="left">
      <?php if($face_image) : ?>
        <img src="<?php echo esc_url($face_image['url']); ?>" alt="<?php echo esc_attr($face_image['alt']); ?>">
      <?php endif; ?>
    </div>
    <div class="right">
      <?php if($author) : ?>
        <p class="author"><?php echo esc_html($author); ?></p>
      <?php endif; ?>
      <?php if($additional_image) : ?>
        <img src="<?php echo esc_url($additional_image['url']); ?>" alt="<?php echo esc_attr($additional_image['alt']); ?>">
      <?php endif; ?>
      <?php if($quote_text) : ?>
        <div class="quote-text <?php echo ($add_poll && $poll_id)?'with-poll':'';  ?>">
          <div class="text"><?php echo $quote_text; ?></div>
          <?php if($add_poll && $poll_id) : ?>
            <div id="poll-<?php echo $poll_id ?>" class="quote-poll">
              <div class="like">
                <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/like.png" alt="Like"></div>
                <div class="like-votes"></div>
              </div>
              <div class="dislike">
                <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dislike.png" alt="Dislike"></div>
                <div class="dislike-votes"></div>
              </div>
            </div>
          <?php endif; ?>  
        </div>
        
      <?php endif; ?>      
    </div>
  </div>
<?php endif; ?>