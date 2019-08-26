<?php
function search_posts($query) {
  if(!is_admin()) :
    if ($query->is_search) 
      $query->set('post_type', 'post');
  endif;
}
?>
