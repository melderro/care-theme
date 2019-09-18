<?php // Genearl Body paragraph content 

$callout_testimonial = get_field('general_content_callout_testimonial');
$imageID = (get_field('testimonial_image', $callout_testimonial->ID) ? get_field('testimonial_image', $callout_testimonial->ID) : get_field('testimonial_default_image', 'option'));


?>
<div class="o-generalbodyContent">
  
  <div class="m-generalbodyContent__content">
    Sorry page could not be found.
  </div>
</div>
