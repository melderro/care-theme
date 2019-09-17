<?php // Home Promotional Links ?>
<div class="o-homePromotionalLinks o-generalPromotionalLinks">
  <?php
    echo get_acf_image_srcset( get_field('footer_promotion_image', 'option'), 'lazyload m-generalPromotionalLinks__image'); 
  ?>

  <div class="m-generalPromotionalLinks__Block homePromotionalData homePromotionalCaseStudy">
    <div class="m-generalPromotionalLinks__title">  
      <?php the_field('footer_promotion_title', 'option'); ?>
    </div>
    <div class="m-generalPromotionalLinks__text">  
      <?php the_field('footer_promotion_text', 'option'); ?>
    </div>
    <a class="m-generalPromotionalLinks__Block homePromotionalImage homePromotionalCaseStudy" href="<?php the_field('footer_promotion_link', 'option'); ?>">Learn More
    </a>
  </div>


</div>
