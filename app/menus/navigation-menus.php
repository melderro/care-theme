<?php
// Sets menu locations
function fwd_menus() {
  register_nav_menus(
    [
      'primary_nav' => __('Primary Navigation', 'fwd'),
      'footer_nav' => __('Footer Navigation', 'fwd'),
      'top_nav' => __('Top Navigation', 'fwd'),
    ]
  );
}
add_action( 'after_setup_theme', 'fwd_menus');

// add custom class to footer li's
function custom_menu_li_class($classes, $item, $args) {
  if($args->theme_location == "footer_nav") {
    $classes[] = 'm-footerLinks__item';
  }
  // top menu
  if(($args->theme_location == "top_nav") || ($args->theme_location == "primary_nav")) {
    $classes[] = 'm-navigationRow__link';
  }

  return $classes;
}
add_filter('nav_menu_css_class', 'custom_menu_li_class', 10, 4);

// add class to footer a tag
function add_link_atts($atts, $item, $args) {
  if($args->menu === "Footer Navigation")
    $atts['class'] = "m-footerLinks__anchor";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts', 10, 3 );

function add_search_box_to_menu( $items, $args ) {
  if($args->theme_location == "top_nav") {
    $items .= '<li>' . get_search_form( false ) . '</li>';    
  }
  return $items;
}
add_filter( 'wp_nav_menu_items','add_search_box_to_menu', 10, 2 );
