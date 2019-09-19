<?php // Genearl Body paragraph content 

$callout_testimonial = get_field('general_content_callout_testimonial');
$imageID = (get_field('testimonial_image', $callout_testimonial->ID) ? get_field('testimonial_image', $callout_testimonial->ID) : get_field('testimonial_default_image', 'option'));


?>
<div class="o-generalbodyContent">
  
  <div class="m-generalbodyContent__content">
    Sorry page could not be found.

    <div class="m-articleGridBlock no-search-results">
          Sorry, your search did not find any results. Please try again.
          <form role="search" method="get" class="search-form-in-page" action="http://care.local/">
            <label>
              <span class="screen-reader-text">Search for:</span>
              <input type="search" class="search-field" placeholder="Search …" value="casd" name="s">
            </label>
            <input type="submit" class="search-submit" value="Search">
          </form>
      </div>
  </div>
</div>
