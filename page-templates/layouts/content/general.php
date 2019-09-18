<?php // Genearl Body paragraph content 

$callout_testimonial = get_field('general_content_callout_testimonial');
$imageID = (get_field('testimonial_image', $callout_testimonial->ID) ? get_field('testimonial_image', $callout_testimonial->ID) : get_field('testimonial_default_image', 'option'));


?>
<div class="o-generalbodyContent">
  
  <div class="m-generalbodyContent__content">
    <h3 class="m-generalbodyContent__subtitle">
      
      <?php the_field('general_top_content_subtitle'); ?>
    </h3>
    <h2 class="m-generalbodyContent__title">
      <?php the_field('general_top_content_title'); ?>
    </h2>
    <div class="m-generalbodyContent__paragraph">
      <?php the_field('general_top_content_text'); ?>  
    </div>
  </div>

  <div class="m-generalbodyContent__contentcallout">
    <div class="m-generalbodyContent__calloutcontainer">
      <div class="m-generalbodyContent__calloutimagecontainer">

        <?php echo get_acf_image_srcset( $imageID, 'lazyload m-generalbodyContent__calloutimage'); ?>
      </div>
      <div class="m-generalbodyContent__calloutcontent">
      <?php echo apply_filters('the_content', $callout_testimonial->post_excerpt); ?>
        <div class="m-generalbodyContent__calloutnamecontainer"> 
          <?php
            if(get_field('testimonial_source_name', $callout_testimonial->ID)) :
          ?>
          <span class="m-bodyContent__calloutname m-generalbodyContent__calloutname">
            <?php the_field('testimonial_source_name', $callout_testimonial->ID); ?>
          </span>
          <?php 
            endif;
            if(get_field('testimonial_source', $callout_testimonial->ID)) :
          ?>
          <span class="m-bodyContent__calloutsource m-generalbodyContent__calloutsource">
            <?php the_field('testimonial_source', $callout_testimonial->ID); ?>
          </span>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>  

</div>
