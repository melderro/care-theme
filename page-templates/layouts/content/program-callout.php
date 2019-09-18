<?php // Body paragraph content
remove_filter ('acf_the_content', 'wpautop');
$testimonial = get_field('testimonial');
$imageID = (get_field('testimonial_image', $testimonial->ID) ? get_field('testimonial_image', $testimonial->ID) : get_field('testimonial_default_image', 'option'));
?>
<div class="o-bodyContent">

  <div class="m-bodyContent__contentcallout">
    <div class="m-bodyContent__callouttext">
      "<?php echo get_field('testimonial_content',$testimonial->ID); ?>"
    </div>
    <div class="m-bodyContent__calloutauthor">
    <?php echo get_acf_image_srcset( $imageID, 'lazyload m-generalbodyContent__calloutimage'); ?>
    <?php
      if(get_field('testimonial_source_name', $testimonial->ID)) :
    ?>
      <span class="m-bodyContent__calloutname">
        <?php echo get_field('testimonial_source_name', $testimonial->ID); ?>
      </span>
    <?php
      endif;
      if(get_field('testimonial_source', $testimonial->ID)) :
      ?>
      <span class="m-bodyContent__calloutsource">
        <?php echo get_field('testimonial_source', $testimonial->ID); ?>
      </span>
      <?php endif; ?>
    </div>
  </div> 
  
</div>
