<?php // Home Promotional Links
  $home_case_study_testimonial = get_field('testimonial', 'option');
  $testimonial = get_field('testimonial', 'option');
  $testimonial_imageID = (get_field('testimonial_image', $testimonial->ID) ? get_field('testimonial_image', $testimonial->ID) : get_field('testimonial_default_image', 'option'));

  $event = get_field('default_event', 'option');
  $event_featured_image_id = (get_field('event_main_image', $event->ID) ? get_field('event_main_image', $event->ID) : get_field('default_event_image', 'option'));

?>
<div class="o-homePromotionalLinks">
  
  <div class="m-homePromotionalLinks__Block homePromotionalData homePromotionalCaseStudy">
    <div class="m-homePromotionalLinks__text">  
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
  <a class="m-homePromotionalLinks__Block homePromotionalImage homePromotionalCaseStudy" href="<?php echo get_the_permalink($home_case_study_testimonial->ID); ?>">
      
  <img class="m-homePromotionalLinks__image lazyload lazyload--blurUp"
    alt="<?php echo get_post_meta($testimonial_imageID, '_wp_attachment_image_alt', true); ?>"
    data-sizes="auto"
    src="<?php echo get_the_post_thumbnail_url($testimonial_imageID->ID, $size = 'preload' ); ?>"
    data-srcset="<?php echo wp_get_attachment_image_srcset($testimonial_imageID); ?>"
  />


    <div class="m-homePromotionalLinks__ContentContainer">
      <h3 class="m-homePromotionalLinks__imagetitle"><?php echo $home_case_study_testimonial->post_title; ?></h3>  
      <div class="m-homePromotionalLinks__imagetext"><?php echo $home_case_study_testimonial->post_excerpt; ?></div>  
      <span class="a-roundLink o-homePromotionalCaseStudyLink"> Read More </span>
    </div>
  </a>
  <div class="m-homePromotionalEvent__container">
    <div class="m-homePromotionalLinks__Block homePromotionalImage homePromotionalEvent">
    <img class="m-homePromotionalLinks__image lazyload lazyload--blurUp"
      alt="<?php echo get_post_meta($event_featured_image_id, '_wp_attachment_image_alt', true); ?>"
      data-sizes="auto"
      src="<?php echo get_the_post_thumbnail_url( $event->ID,  $size = 'preload' ); ?>"
      data-srcset="<?php echo wp_get_attachment_image_srcset( $event_featured_image_id) ?>"
    />  
    </div>
  
    <div class="m-homePromotionalLinks__Block homePromotionalData homePromotionalEvent">
      <h2 class="m-homePromotionalLinks__title">  
        Event: <?php echo $event->post_title ?>
      </h2>
      <div class="m-homePromotionalLinks__text">  
        <?php echo $event->post_excerpt; ?>
      </div>
      <a href="<?php echo get_the_permalink($event->ID); ?>"><span class="a-roundLink o-homePromotionalEventLink">Learn More</span></a>
    </div>
  </div>
</div>