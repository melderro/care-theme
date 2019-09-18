<?php
// Changes the save location for ACF fields
add_filter('acf/settings/save_json', 'fwd_acf_json_save_point');
function fwd_acf_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/resources/acf';
  return $path;
}

// Changes the load location for ACF fields
add_filter('acf/settings/load_json', 'fwd_acf_json_load_point');
function fwd_acf_json_load_point( $paths ) {
  unset($paths[0]);
  $paths[] = get_stylesheet_directory() . '/resources/acf';
  return $paths;
}

//load resources from options page
function acf_load_program_related_resources_field_choices($field){

    // reset choices
    $field['choices'] = array();

    // if has rows
    if (have_rows('uploads', 'option')) {

        // while has rows
        while (have_rows('uploads', 'option')) {
            the_row();

            // vars
            $file = get_sub_field('uploads_file');
            $url = $file['url'];
            $label = $file['title'];

            // append to choices
            $field['choices'][$url] = $label;

        }

    }

    // return the field
    return $field;

}

//add_filter('acf/load_field/name=program_related_resources_file', 'acf_load_program_related_resources_field_choices');
