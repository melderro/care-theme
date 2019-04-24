<?php // Body paragraph content

$testimonial = get_field('program_content_callout_testimonial');
$source_image = get_field('testimonial_image', $testimonial->ID);
$source = get_field('testimonial_source', $testimonial->ID);
$source_name = get_field('testimonial_source_name', $testimonial->ID);
?>
<div class="o-bodyContent">

  <div class="m-bodyContent__contentcallout">
    <div class="m-bodyContent__callouttext">
      "<?php echo $testimonial->post_excerpt; ?>"
    </div>
    <div class="m-bodyContent__calloutauthor">
      <img class="m-bodyContent__calloutimage" src="<?php echo get_acf_image(  $source_image, '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
      <span class="m-bodyContent__calloutname"><?php echo $source_name; ?></span>
      <span class="m-bodyContent__calloutsource">
        <?php echo $source; ?>
      </span>
    </div>
  </div> 
  
</div>
