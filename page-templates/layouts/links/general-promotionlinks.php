<?php // Home Promotional Links ?>
<div class="o-homePromotionalLinks o-generalPromotionalLinks">
  
  <div class="m-homePromotionalLinks__Block homePromotionalData homePromotionalCaseStudy">
    <div class="m-homePromotionalLinks__text">  
      <?php the_field('general_promotion_links_text'); ?>
    </div>
    <div class="m-homePromotionalLinks__source">  
      <?php the_field('general_promotion_links_source'); ?>
    </div>
  </div>
  <a class="m-homePromotionalLinks__Block homePromotionalImage homePromotionalCaseStudy" href="<?php the_field('home_case_study_link'); ?>">
      <img class="m-homePromotionalLinks__image" src="<?php echo get_acf_image( get_field('general_video'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </a>

</div>
