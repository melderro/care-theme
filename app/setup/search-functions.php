<?php
function search_posts($query) {
  if(!is_admin()) :
    if ($query->is_search) :
      $query->set('post_status', 'publish');
    endif;
  endif;
}

add_filter( 'pre_get_posts', 'search_posts' );
?>
