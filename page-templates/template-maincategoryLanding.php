<?php
/**
 * Template Name: Main Category Content
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
        <section id="navigationMenu" class="maincategory__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
        <section id="topBanner" class="maincategory__topBanner">
            <?php get_partial('media', 'topbanner'); ?>
        </section>
      </header>

      <?php
      // Main content area
      ?>
      <main>
        <section id="maincategoryintroContent" class="maincategory__intro">
          <?php get_partial('content', 'maincategory-intro'); ?>
        </section>
        <section id="maincategoryProgramLinks" class="maincategory__programlinks">
          <?php get_partial('links', 'maincategory-programlinks'); ?>
        </section>
        <section id="maincategorybodyContent" class="maincategory__bodyContent">
          <?php get_partial('content', 'maincategory'); ?>
        </section>
        <section id="maincategoryCaseStudy" class="maincategory__caseStudy">
          <?php get_partial('links', 'maincategory-casestudy'); ?>
        </section>
      </main>

      <?php
      // Footer content
      ?>
      <footer id="footer">
        <section id="supplementalLinks" class="maincategory__footerLinks">
            <?php get_partial('links', 'supplement-links'); ?>
          </section>
        <section id="newsletterSignup" class="maincategory__callToAction">
          <?php get_partial('media', 'newsletterSignup'); ?>
        </section>
        <section id="footerContent" class="maincategory__footerContent">
          <?php get_partial('content', 'footer'); ?>
        </section>
      </footer>

      <?php
      // Footer meta data and scripts. Includes the WP admin footer, etc.
      get_partial('meta', 'foot');
      ?>
    </div>
  </body>
</html>