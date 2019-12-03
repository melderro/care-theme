<?php
/** 
 *  Get listing of upcoming events for specific category.
 */

 function get_related_events(){
  $category = get_term_by('term_taxonomy_id', get_field('program_event_category'),'tribe_events_cat');
  //check current category
  $events = tribe_get_events(array(
      'posts_per_page' => 6,
      'start_date' => 'now',
      'tax_query'=> array(
        array(
          'taxonomy' => 'tribe_events_cat',
          'field' => 'term_id',
          'terms' => $category->term_id,
          'include_children' => false
        )
      )
    )
  );

  // no events in current category? 
  if(!$events) :
    // if it has parent, check there
    if($category->parent && $category->parent !== 5) :
      $category = get_term_by('id', $category->parent,'tribe_events_cat');
      $events = tribe_get_events(array(
          'posts_per_page' => 4,
          'start_date' => 'now',
          'tax_query'=> array(
            array(
              'taxonomy' => 'tribe_events_cat',
              'field' => 'slug',
              'terms' => $category->slug,
              'include_children' => false
            )
          )
        )
      );
    else :
      // no parent category, check children
      $events = tribe_get_events(array(
          'posts_per_page' => 4,
          'start_date' => 'now',
          'tax_query'=> array(
            array(
              'taxonomy' => 'tribe_events_cat',
              'field' => 'term_id',
              'terms' => $category->term_id,
            )
          )
        )
      );
    endif;
  endif;

  // build LI structure
  if($events) :
    foreach ($events as $event) :
      $permalink = get_the_permalink($event->ID);
      $title = $event->post_title;
      $li_html .= <<<LI
      <li><a href="$permalink">$title</a></li>
LI;
    endforeach;
  else: 
    $li_html = "<li><a>There are currently no events.</a></li>";
  endif;
  echo ($li_html);
}
/**
 * Display number of current registered people for an event
 *
 * @param [type] $field
 * @return void
 */
function admin_current_registration_count( $field){
  var_dump($field);
  $value = $field['value'];
  if(!$value)
    $value = 0;
  $field['message'] = $value . ' guests currently registered';
  $field['value'] = $value;
  return $field;
}
//add_filter('acf/load_field/key=field_5cd04db5d02b1', 'admin_current_registration_count');

/**
 * when registration complete, add to registration count 
 * 
 * 
 */

function add_registrant_to_event( $entry, $form ) {
    //
    $key = array_search('eventRegistration', $entry);
    if($key !== FALSE) :
      foreach($form['fields'] as &$field) :
        if($field->label == "PostID") :
          $fieldID = $field->id;
          break;
        endif;
      endforeach;
      $post_id = $entry[$fieldID];
      
      $current_registration = get_field('current_number_registrations', $post_id);
      $current_registration++;
      update_field('current_number_registrations', $current_registration, $post_id);
    endif;
    
}
add_action( 'gform_after_submission', 'add_registrant_to_event', 10, 2 );

/**
 * 
 * dynamically populate field with post id
 */

function populate_post_id( $form ) {
  global $post;
  foreach($form['fields'] as &$field) :
    if($field->label == "PostID") :
      $field->defaultValue = $post->ID;
      break;
    endif;
  endforeach;
  return $form;
}
add_filter( 'gform_pre_render', 'populate_post_id' );



 