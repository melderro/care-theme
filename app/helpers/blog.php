<?php
/**
 * get_main_parent_category function
 *
 * @param [type] $category
 * @return category name
 * 
 * keep searching parent category until it finds the top level category under programs
 */
function get_main_parent_category($category) {
  while($category->category_parent != 49) :
    if($category->category_parent == 0)
      return;
    $category = get_category($category->category_parent);
  endwhile;
  return $category->name;
}