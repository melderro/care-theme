<?php
/** 
 *  Remove all links from content
*/
function no_links($thelist) {
  return preg_replace('#<a.*?>([^<]*)</a>#i', '$1', $thelist);
}
/** 
 *  get static page title
*/
function get_page_title(){
  if(is_404()) :
    return "404 Title";
  elseif(is_search()) :
    $s = get_search_query();
    return "Search Results: ".$s;
  endif;
}
/** 
 *  get static page sub title
*/
function get_sub_title(){
  if(is_404()) :
    return "404 Sub Title";
  elseif(is_search()) :
    return "Search Sub Results";
  endif;
}

/** 
 *  get static page sub title
*/
function get_posttype_name(){
  if(is_page('success-stories')) :
    return "testimonial";
  else :
    return "post";
  endif;
}

/** 
 *  get static page sub title
*/
function add_acf_excerpt($content) {
  $text = '';
  if('post' == get_post_type(get_the_ID()) && !$content) :
    $text = get_field('intro_text');
    $text = explode (' ', $text);
    for($i=0; $i<30; $i++)
      $excerpt .= $text[$i] . " ";
    substr($excerpt, 0, 1);
    $excerpt .= "...";
    return $excerpt;
  else : 
    return $content;
  endif;
}

add_filter('the_excerpt', 'add_acf_excerpt');