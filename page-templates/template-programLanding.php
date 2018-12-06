<?php
/**
 * Template Name: Program Landing Page
 * Description: General content page
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php
  // Header meta tags
  get_partial('meta', 'head');
  ?>

  <body <?php body_class('programLanding'); ?> >

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
      <section id="introContent" class="programLanding__intro">
        <?php get_partial('content', 'intro'); ?>
      </section>
      <section id="bodyContent" class="programLanding__bodyContent">
        <?php get_partial('content', 'program'); ?>
      </section>
      <section id="bodyContent" class="programLanding__resourceLinks">
        <?php get_partial('links', 'program-resources'); ?>
      </section>
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