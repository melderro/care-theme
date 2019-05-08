
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

  <div class="tribe-events-schedule tribe-clearfix">
    <?php if ( tribe_get_cost() ) : ?>
      <span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
    <?php endif; ?>
  </div>

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
        <?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>

        <div class="tribe-events-top-content">
	        <?php the_title('<h1 class="tribe-events-single-event-title">', '</h1>');?>
          <div class="tribe-events-detials-container">
            <?php tribe_get_template_part('modules/meta/details');?>
            <?php tribe_get_template_part('modules/meta/venue');?>
          </div>
        </div>
      </div>
      <!-- Event content -->
      <?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
      <div class="tribe-events-single-event-description tribe-events-content">
        <?php the_content(); ?>
        <?php
          $formId = get_field('events_registration_form');
          gravity_form($formId, false, false, false, '', false);

        ?>
      </div>
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