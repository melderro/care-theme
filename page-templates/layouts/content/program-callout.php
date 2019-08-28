<?php // Body paragraph content
remove_filter ('acf_the_content', 'wpautop');
$testimonial = get_field('testimonial');
?>
<div class="o-bodyContent">

  <div class="m-bodyContent__contentcallout">
    <div class="m-bodyContent__callouttext">
      "<?php echo get_field('testimonial_content',$testimonial->ID); ?>"
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
