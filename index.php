<?php
// Basic page template routing. Only applies to 'Default Template'
if( is_front_page() ):
  get_template_part( 'page-templates/template-homepage' );
elseif( is_home() || is_archive() || is_paged() ):
  get_template_part( 'page-templates/blog-archive' );
elseif( is_singular(array ('post', 'testimonial'))) :
  get_template_part( 'page-templates/template-newsLanding' );
elseif(is_404()) :
  get_template_part( 'page-templates/template-404' );
elseif(is_search()) :
  get_template_part( 'page-templates/template-search' );  
else:
  get_template_part( 'page-templates/template-generalLanding' );
endif;
?>