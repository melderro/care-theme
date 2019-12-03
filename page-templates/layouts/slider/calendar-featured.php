<?php // Feature slider for use at the top of a page 

$category = get_queried_object();
if($category->slug == "class") :
  $image = get_field('classes_groups_banner', 'option');
elseif ($category->slug == "general-events") :
  $image = get_field('events_banner', 'option');
elseif ($category->slug == "event") :
  $image = get_field('signature_events_banner', 'option');
elseif ($category->slug == "training") :
  $image = get_field('training_banner', 'option');
endif;

?>
<div class="o-featureSlider o-eventsfeatureSlider preload">
  <?php
  if(!$image): 
    if(have_rows('featured_slides', 'option')) :
        while(have_rows('featured_slides', 'option')): the_row();
    ?>

    <div class="m-featureSlider__slide">
      <?php 
        if(get_sub_field('featured_slide_link', 'option')) :
      ?>    
      <a class="m-featureSlider__block" href="<?php the_sub_field('featured_slide_link', 'option'); ?>">
      <?php endif; ?>
        <div class="m-featureSlider">
        <?php echo get_acf_image_srcset( get_sub_field('featured_slide_image','option'), 'lazyload m-featureSlider__image'); ?>
          <div class="m-featureSlider__content">
            <?php 
              if(get_sub_field('featured_slide_title', 'option')) :
            ?>
            <h2 class="m-featureSlider__title">
              <?php the_sub_field('featured_slide_title', 'option'); ?>
            </h2>
            <?php 
              endif; 
              if(get_sub_field('featured_slide_text')) :
            ?>
            <div class="m-eventsfeatureSlider">
              <?php the_sub_field('featured_slide_text'); ?>
            </div>
            <?php 
              endif;
              if(get_sub_field('featured_slide_link_title', 'option')) :
            ?>
            <div class="m-featureSlider__link">
              <span class="a-roundLink o-featureSliderlink">
                <?php the_sub_field('featured_slide_link_title', 'option'); ?>
              </span>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php 
        if(get_sub_field('featured_slide_link', 'option')) :
      ?>       
      </a>
        <?php endif; ?>
    </div>
  <?php 
        endwhile;
    endif;
  else: 
  ?>
    <div class="m-featureSlider__slide">
        <div class="m-featureSlider">
        <?php echo get_acf_image_srcset( $image, 'lazyload m-featureSlider__image'); ?>
          <div class="m-featureSlider__content">
            <h2 class="m-featureSlider__title">
            Care Events & Calendar
            </h2>
          </div>
        </div>
    </div>
  <?php endif; ?>
</div>

