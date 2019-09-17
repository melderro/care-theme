<?php // Home Promotional Links
  $home_case_study_testimonial = get_field('testimonial', 'option');
  $featured_image_id = get_post_thumbnail_id($home_case_study_testimonial->ID);

  $event = get_field('default_event', 'option');
  $event_featured_image_id = get_post_thumbnail_id($event->ID);

?>
<div class="o-homePromotionalLinks">
  
  <div class="m-homePromotionalLinks__Block homePromotionalData homePromotionalCaseStudy">
    <div class="m-homePromotionalLinks__text">  
      <?php the_field('data_statistic_content', 'option'); ?>
    </div>
    <div class="m-homePromotionalLinks__source">  
      <?php the_field('data_statistic_content_source', 'option'); ?>
    </div>
  </div>
  <a class="m-homePromotionalLinks__Block homePromotionalImage homePromotionalCaseStudy" href="<?php echo get_the_permalink($home_case_study_testimonial->ID); ?>">
      
  <img class="m-homePromotionalLinks__image lazyload lazyload--blurUp"
    alt="<?php echo get_post_meta($featured_image_id, '_wp_attachment_image_alt', true); ?>"
    data-sizes="auto"
    src="<?php echo get_the_post_thumbnail_url( $home_case_study_testimonial->ID,  $size = 'preload' ); ?>"
    data-srcset="<?php echo wp_get_attachment_image_srcset( $featured_image_id) ?>"
  />


    <div class="m-homePromotionalLinks__ContentContainer">
      <h3 class="m-homePromotionalLinks__imagetitle"><?php echo $home_case_study_testimonial->post_title; ?></h3>  
      <div class="m-homePromotionalLinks__imagetext"><?php echo $home_case_study_testimonial->post_excerpt; ?></div>  
      <span class="a-roundLink o-homePromotionalCaseStudyLink"> Read More </span>
    </div>
  </a>
  <div class="m-homePromotionalLinks__Block homePromotionalImage homePromotionalEvent">
  <img class="m-homePromotionalLinks__image lazyload lazyload--blurUp"
    alt="<?php echo get_post_meta($event_featured_image_id, '_wp_attachment_image_alt', true); ?>"
    data-sizes="auto"
    src="<?php echo get_the_post_thumbnail_url( $event->ID,  $size = 'preload' ); ?>"
    data-srcset="<?php echo wp_get_attachment_image_srcset( $event_featured_image_id) ?>"
  />  
  </div>
  
  <a class="m-homePromotionalLinks__Block homePromotionalData homePromotionalEvent">
    <h2 class="m-homePromotionalLinks__title">  
      <?php echo $event->post_title ?>
    </h2>
    <div class="m-homePromotionalLinks__text">  
      <?php echo $event->post_excerpt; ?>
    </div>
    <a href="<?php echo get_the_permalink($event->ID); ?>"><span class="a-roundLink o-homePromotionalEventLink">Learn More</span></a>
  </a>
</div>