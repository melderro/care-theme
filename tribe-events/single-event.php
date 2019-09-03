
<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Display -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.23
 *
 */
?>
<!doctype html>
<html <?php language_attributes();?>>
  <?php
// Header meta tags
get_partial('meta', 'head');
?>

  <body <?php body_class();?> ?>

    <?php
// Included for the sake of plugins and child themes that rely on it.
do_action('get_header');
?>

    <?php
// Website header area
?>

<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<div id="tribe-events-content" class="tribe-events-single">


  <!-- Notices -->
  <?php tribe_the_notices() ?>


  <!-- Event header -->
  <div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
    <!-- Navigation -->
    <nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
      <ul class="tribe-events-sub-nav">
        <li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
        <li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
      </ul>
      <!-- .tribe-events-sub-nav -->
    </nav>
  </div>
  <!-- #tribe-events-header -->

  <?php while ( have_posts() ) :  the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <!-- Event featured image, but exclude link -->
      <div class="tribe-events-top-container">
        <?php 
          $featured_image = tribe_event_featured_image($event_id, 'full', false); 
          if($featured_image)
            echo $featured_image;
          else
            echo '<div class="tribe-events-event-image"><img width="600" height="600" src="'. get_site_url() .'/wp-content/uploads/2019/08/care-employee-assistance-human-resources.jpg" class="attachment-full size-full wp-post-image" alt="care-employee-assistance-human-resources" srcset="'. get_site_url() .'/wp-content/uploads/2019/08/care-employee-assistance-human-resources.jpg 600w, '.  get_site_url() .'/wp-content/uploads/2019/08/care-employee-assistance-human-resources-150x150.jpg 150w, '. get_site_url() .'/wp-content/uploads/2019/08/care-employee-assistance-human-resources-300x300.jpg 300w, '. get_site_url() .'/wp-content/uploads/2019/08/care-employee-assistance-human-resources-64x64.jpg 64w, '.get_site_url() .'/wp-content/uploads/2019/08/care-employee-assistance-human-resources-128x128.jpg 128w, '.get_site_url() .'/wp-content/uploads/2019/08/care-employee-assistance-human-resources-240x240.jpg 240w, '.get_site_url() .'/wp-content/uploads/2019/08/care-employee-assistance-human-resources-320x320.jpg 320w, '. get_site_url() .'/wp-content/uploads/2019/08/care-employee-assistance-human-resources-360x360.jpg 360w, '.get_site_url().'/wp-content/uploads/2019/08/care-employee-assistance-human-resources-375x375.jpg 375w, '. get_site_url() .'/wp-content/uploads/2019/08/care-employee-assistance-human-resources-480x480.jpg 480w, '. get_site_url().'/wp-content/uploads/2019/08/care-employee-assistance-human-resources-540x540.jpg 540w" sizes="(max-width: 600px) 100vw, 600px"></div>';
        ?>

        <div class="tribe-events-top-content">
          <div class="tribe-events-category-list">
            <?php 
              $categories = get_the_terms(get_the_ID(), 'tribe_events_cat');
              foreach ($categories as $category ) :
                $category_list .= $category->name . ", ";
              endforeach;
              echo substr($category_list, 0, -2);
            ?>
          </div>
	        <?php the_title('<h1 class="tribe-events-single-event-title">', '</h1>');?>
          <div class="tribe-events-detials-container">
            <?php tribe_get_template_part('modules/meta/details');?>
            <?php tribe_get_template_part('modules/meta/venue');?>
          </div>
        </div>
      </div>
      <!-- Event content -->
      <?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
      <div class="tribe-events-single-event-description tribe-events-content closed">
        <?php the_content(); ?>
        <?php
          $formId = get_field('events_registration_form');
          if($formId)
            gravity_form($formId, false, false, false, '', false);

        ?>
      </div>
      <div class="tribe-events-read-more-button">Read More</div>
      <!-- .tribe-events-single-event-description -->
      <?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

      <!-- Event meta -->
      <?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php tribe_get_template_part('modules/meta');?>
    </div> <!-- #post-x -->
  <?php endwhile; ?>


</div><!-- #tribe-events-content -->
  </body>
</html>