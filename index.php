<?php
// Basic page template routing. Only applies to 'Default Template'
if( is_front_page() ):
  get_template_part( 'page-templates/template-homepage' );
elseif( is_home() || is_archive() || is_paged() ):
  get_template_part( 'page-templates/blog-archive' );
elseif( is_singular(array ('post', 'testimonial'))) :
  get_template_part( 'page-templates/template-newsLanding' );
else:
  get_template_part( 'page-templates/template-generalLanding' );
endif;
?>