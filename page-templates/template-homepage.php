<?php
/**
 * Template Name: Homepage Content
 * Description: General content page
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php
  // Header meta tags
  get_partial('meta', 'head');
  ?>

  <body <?php body_class('homepage'); ?> >

    <?php
    // Included for the sake of plugins and child themes that rely on it.
    do_action('get_header');
    ?>

    <?php
    // Website header area
    ?>
    <header>
      <section id="navigationMenu" class="programLanding__nav">
        <?php get_partial('navigation', 'menu'); ?>
      </section>
    </header>

    <?php
    // Main content area
    ?>
    <main>
    </main>

    <?php
    // Footer content
    ?>
    <footer>
    </footer>

    <?php
    // Footer meta data and scripts. Includes the WP admin footer, etc.
    get_partial('meta', 'foot');
    ?>
  </body>
</html>