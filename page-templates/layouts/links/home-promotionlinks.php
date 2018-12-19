<?php // Home Promotional Links ?>
<div class="o-homePromotionalLinks">
  
  <div class="m-homePromotionalLinks__Block homePromotionalData homePromotionalCaseStudy">
    <div class="m-homePromotionalLinks__text">  
      <?php the_field('home_promotion_links_text'); ?>
    </div>
    <div class="m-homePromotionalLinks__source">  
      <?php the_field('home_promotion_links_source'); ?>
    </div>
  </div>
  <a class="m-homePromotionalLinks__Block homePromotionalImage homePromotionalCaseStudy" href="<?php the_field('home_case_study_link'); ?>">
      <img class="m-homePromotionalLinks__image" src="<?php echo get_acf_image( get_field('home_case_study_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
    <div class="m-homePromotionalLinks__ContentContainer">
      <h3 class="m-homePromotionalLinks__imagetitle"><?php the_field('home_case_study_title'); ?></h3>  
      <div class="m-homePromotionalLinks__imagetext"><?php the_field('home_case_study_text'); ?></div>  
      <span class="a-roundLink o-homePromotionalCaseStudyLink"> <?php the_field('home_case_study_link_title'); ?></span>
    </div>
  </a>
  
  <div class="m-homePromotionalLinks__Block homePromotionalImage homePromotionalEvent">
    <img class="m-homePromotionalLinks__image" src="<?php echo get_acf_image( get_field('home_event_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  
  <a class="m-homePromotionalLinks__Block homePromotionalData homePromotionalEvent">
    <h2 class="m-homePromotionalLinks__title">  
      <?php the_field('home_event_title'); ?>
    </h2>
    <div class="m-homePromotionalLinks__text">  
      <?php the_field('home_event_text'); ?>
    </div>
    <span class="a-roundLink o-homePromotionalEventLink">Learn More</span>
  </a>
</div>