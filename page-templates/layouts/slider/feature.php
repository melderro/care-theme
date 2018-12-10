<?php // Feature slider for use at the top of a page ?>
<div class="o-featureSlider">
  <?php
  if(have_rows('featured_slides')) :
      while(have_rows('featured_slides')): the_row();

  ?>
  <div class="m-featureSlider__slide">
    <a class="m-featureSlider__block" href="<?php the_sub_field('featured_slide_link'); ?>">
      <div class="m-featureSlider">
        <img class="m-featureSlider__image" data-lazy="<?php echo get_acf_image(get_sub_field('featured_slide_image'), '960w', 'http://via.placeholder.com/934x687?text=image'); ?>" />
        <div class="m-featureSlider__content">
          <h3 class="m-featureSlider__title">
            <?php the_sub_field('featured_slide_title'); ?>
          </h3>
          <?php the_sub_field('featured_slide_text'); ?>

        </div>
      </div>
    </a>
  </div>
  <?php 
      endwhile;
  endif;
  ?>
</div>
