<?php
/**
 * Template Name: General Content Content
 * Description: General content page
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php
  // Header meta tags
  get_partial('meta', 'head');
  ?>

  <body <?php body_class(); ?> ?>
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
    </div>
  </body>
</html>