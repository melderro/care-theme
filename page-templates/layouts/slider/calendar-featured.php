<?php // Feature slider for use at the top of a page ?>
<div class="o-featureSlider o-eventsfeatureSlider preload">
  <?php
  if(have_rows('featured_slides', 'option')) :
      while(have_rows('featured_slides', 'option')): the_row();
  ?>

  <div class="m-featureSlider__slide">
    <a class="m-featureSlider__block" href="<?php the_sub_field('featured_slide_link', 'option'); ?>">
      <div class="m-featureSlider">
      <?php echo get_acf_image_srcset( get_sub_field('featured_slide_image','option'), 'lazyload m-featureSlider__image'); ?>
        <div class="m-featureSlider__content">
          <h2 class="m-featureSlider__title">
            <?php the_sub_field('featured_slide_title', 'option'); ?>
          </h2>
          <div class="m-eventsfeatureSlider">
            <?php the_sub_field('featured_slide_text'); ?>
          </div>
          <div class="m-featureSlider__link">
          <span class="a-roundLink o-featureSliderlink"><?php the_sub_field('featured_slide_link_title', 'option'); ?></span>
        </div></div>
      </div>
    </a>
  </div>
  <?php 
      endwhile;
  endif;
  ?>
</div>
