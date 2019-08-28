<?php // Body paragraph content

$testimonial = get_field('program_content_callout_testimonial');
?>
<div class="o-bodyContent">

  <div class="m-bodyContent__contentcallout">
    <div class="m-bodyContent__callouttext">
      "<?php echo $testimonial->post_content; ?>"
    </div>
    <div class="m-bodyContent__calloutauthor">
    <?php echo get_acf_image_srcset( get_field('testimonial_image', $testimonial->ID), 'lazyload m-generalbodyContent__calloutimage'); ?>
      <span class="m-bodyContent__calloutname"><?php echo get_field('testimonial_source', $testimonial->ID); ?></span>
      <span class="m-bodyContent__calloutsource">
        <?php echo get_field('testimonial_source_name', $testimonial->ID); ?>
      </span>
    </div>
  </div> 
  
</div>
