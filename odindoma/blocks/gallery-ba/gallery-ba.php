<?php $anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'gallery-ba';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<?php if (!get_field('hide_block')) : ?>

  <?php
  $before     = get_field('before');
  $after      = get_field('after');
  ?>

  <div <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?>" >    
    <div class="before-after">
      <?php if($before) : ?>
        <div class="before">
          <?php foreach( $before as $index => $before_id ): ?>
            <div class="image image-<?php echo $index; ?>">
              <img src="<?php echo esc_url($before_id['url']); ?>" alt="<?php echo esc_html($before_id['alt']); ?>">
            </div>
          <?php endforeach; ?>
          <p>До</p>
          <div class="nav">
            <?php foreach( $before as $index => $before_id ): ?>
              <div class="nav-item nav-item-<?php echo $index; ?>"></div>
            <?php endforeach; ?>
          </div>
        </div>        
      <?php endif; ?>
      <?php if($after) : ?>
        <div class="after">
          <?php foreach( $after as $index => $after_id ): ?>
            <div class="image image-<?php echo $index; ?>">
              <img src="<?php echo esc_url($after_id['url']); ?>" alt="<?php echo esc_html($after_id['alt']); ?>">
            </div>
          <?php endforeach; ?>
          <p>После</p>
          <div class="nav">
            <?php foreach( $after as $index => $after_id ): ?>
              <div class="nav-item nav-item-<?php echo $index; ?>"></div>
            <?php endforeach; ?>
          </div>
        </div>        
      <?php endif; ?>
    </div>

    <div class="before-after-mobile show-image-0">
      <?php if($before) : ?>
        <div class="ba">
          <?php foreach( $before as $index => $before_id ): ?>
            <div class="before-after-item image-<?php echo $index; ?>">
              <img class="before" src="<?php echo esc_url($before_id['url']); ?>" alt="<?php echo esc_html($before_id['alt']); ?>">
              <div class="after" style="background-image:url(<?php echo esc_url($after[$index]['url']); ?>);"></div>
              <input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider">
              <div class='slider-button'></div>
            </div>
          <?php endforeach; ?>
        </div>        
      <?php endif; ?>   

      <?php if($after) : ?>
        <div class="nav">
          <?php foreach( $after as $index => $after_id ): ?>
            <div class="nav-image nav-image-<?php echo $index; ?>">
              <img src="<?php echo esc_url($after_id['url']); ?>" alt="<?php echo esc_html($after_id['alt']); ?>">
            </div>
          <?php endforeach; ?>          
        </div>        
      <?php endif; ?>   
    </div>
  </div>
<?php endif; ?>