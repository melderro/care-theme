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
    get_partial('meta', 'gtm');
  ?>
  <div id="mmenu-container">
    <?php
// Included for the sake of plugins and child themes that rely on it.
do_action('get_header');
?>

    <?php
// Website header area
?>
    <header>
      <section id="navigationMenu" class="generalLanding__nav">
        <?php get_partial('navigation', 'menu');?>
      </section>
      <?php
        if(!is_single() || get_query_var('eventDisplay') == 'all') :
      ?>
      <section id="topBanner" class="calendar__topBanner">
          <?php get_partial('slider', 'calendar-featured');?>
      </section>
      <?php 
        endif;
      ?>
    </header>


<main id="tribe-events-pg-template" class="tribe-events-pg-template">
  <?php 
  tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
</main> <!-- #tribe-events-pg-template -->
    <?php
// Footer content
?>
    <footer id="footer">
      <section id="supplementalLinks" class="programLanding__footerLinks">
          <?php get_partial('links', 'supplement-links');?>
        </section>
      <section id="newsletterSignup" class="programLanding__callToAction">
        <?php get_partial('media', 'newsletterSignup');?>
      </section>
      <section id="footerContent" class="programLanding__footerContent">
        <?php get_partial('content', 'footer');?>
      </section>
    </footer>

    <?php
// Footer meta data and scripts. Includes the WP admin footer, etc.
get_partial('meta', 'foot');
?>
</div>
  </body>
</html>