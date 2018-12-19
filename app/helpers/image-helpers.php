<?php
/** return image */

function get_acf_image($image_id, $size, $default = '')
{
    if (is_numeric($image_id)) {
        $image = wp_get_attachment_image_src($image_id, $size);
        return $image[0];
    } else {
        return $default;
    }
}

function get_acf_image_srcset($image_id, $class='', $size = array('2600w', '1300w', '1280w', '800w', '640w', '480w'),  $default = '')
{
    if (is_numeric($image_id)) {
        $image = wp_get_attachment_image($image_id, $size, false, ["class" => $class] );
        return $image;
    } else {
        return $default;
    }

}
