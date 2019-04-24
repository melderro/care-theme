<?php

/**
 * Register new post types and associated tax
 * Post Type: Testimonials.
 */

function cptui_register_my_cpts_testimonial()
{

    $labels = array(
        "name" => __("Testimonials", "fwd"),
        "singular_name" => __("Testimonial", "fwd"),
        "menu_name" => __("Testimonials", "fwd"),
        "all_items" => __("All Testimonials", "fwd"),
    );

    $args = array(
        "label" => __("Testimonials", "fwd"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => array("slug" => "testimonial", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "thumbnail", "excerpt"),
        "taxonomies" => array("taxonomy_category"),
    );

    register_post_type("testimonial", $args);
}

add_action('init', 'cptui_register_my_cpts_testimonial');

function cptui_register_my_taxes()
{

    /**
     * Taxonomy: Categories.
     */

    $labels = array(
        "name" => __("Categories", "fwd"),
        "singular_name" => __("Category", "fwd"),
    );

    $args = array(
        "label" => __("Categories", "fwd"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array('slug' => 'taxonomy_category', 'with_front' => true),
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "taxonomy_category",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
    );
    register_taxonomy("taxonomy_category", array("testimonial"), $args);
}
add_action('init', 'cptui_register_my_taxes');
