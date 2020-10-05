<?php // General Promotional Links

  $event = get_field('default_event', 'option');
  if(!$event) :
    $event = tribe_get_events([ 
      'posts_per_page' => 1, 
      'start_date'     => 'now',
    ]);
    $event = $event[0];
  endif;
  $event_featured_image_id = (get_field('event_main_image', $event->ID) ? get_field('event_main_image', $event->ID) : get_field('default_event_image', 'option'));

?>
<div class="o-generalPromotionalLinks">
  
  <div class="m-generalPromotionalLinks__Block generalPromotionalData generalPromotionalCaseStudy">
    <div class="m-generalPromotionalLinks__text">  
      <?php the_field('data_statistic_content', 'option'); ?>
    </div>
    <?php
     if(get_field('data_statistic_content_source', 'option')) :
    ?>
    <div class="m-homePromotionalLinks__source">  
      <?php the_field('data_statistic_content_source', 'option'); ?>
    </div>
    <?php endif; ?>
  </div>
  <a class="m-generalPromotionalEvent__container" href="<?php echo get_the_permalink($event->ID); ?>">
  <img class="m-generalPromotionalLinks__image lazyload lazyload--blurUp"
    alt="<?php echo get_post_meta($event_featured_image_id, '_wp_attachment_image_alt', true); ?>"
    data-sizes="auto"
    src="<?php echo get_the_post_thumbnail_url( $event->ID,  $size = 'preload' ); ?>"
    data-srcset="<?php echo wp_get_attachment_image_srcset( $event_featured_image_id) ?>"
  />  
  
  <div class="m-generalPromotionalLinks__ContentContainer">
    <h3 class="m-generalPromotionalLinks__title">  
      Event: <?php echo $event->post_title ?>
    </h3>
    <div class="m-homePromotionalLinks__imagetext"><?php echo $event->post_excerpt; ?></div> 
    <span class="a-roundLink o-generalPromotionalEventLink">Learn More</span>
</div>
</a>
</div>