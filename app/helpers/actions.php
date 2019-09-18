<?php
function add_blog_post_to_query( $query ) {
  if ( $query->is_search() && $query->is_main_query() ) {
      $query->set( 'post_type', 'any' );
      $query->set( 'posts_per_page', 5 );
  }
}
add_action( 'pre_get_posts', 'add_blog_post_to_query' );