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
