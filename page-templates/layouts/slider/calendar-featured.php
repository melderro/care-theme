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
else:
  $image = get_field('main_event_landing_page_banner', 'option');
endif;

?>
<div class="o-featureSlider o-eventsfeatureSlider preload">
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
</div>

