<?php
function main_query_modifies( $query ) {
  if ( $query->is_search() && $query->is_main_query() ) {
      $query->set( 'post_type', 'any' );
      $query->set( 'posts_per_page', 5 );
      $query->set('post_status', 'publish');
  }
}
add_action( 'pre_get_posts', 'main_query_modifies' );