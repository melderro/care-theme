<?php
/**
 * Template Name: 404 Template
 * Description: 404 page
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php
  // Header meta tags
  get_partial('meta', 'head');
  ?>

  <body <?php body_class(); ?> ?>
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
          <?php get_partial('navigation', 'menu'); ?>
        </section>
        <section id="topBanner" class="generalLanding__topBanner">
            <?php get_partial('media', 'static-topbanner'); ?>
        </section>
      </header>

      <?php
      // Main content area
      ?>
      <main>
        <section id="generalContent" class="generalLanding__bodyContent">
          <?php get_partial('content', '404-general'); ?>
        </section>
        <section id="generalCaseStudy" class="generalLanding__caseStudy">
          <?php get_partial('links', 'maincategory-casestudy'); ?>
        </section>
        <section id="generalPromotionlinks" class="generalLanding__promotionlinks">
          <?php get_partial('links', 'general-promotionlinks'); ?>
        </section>
      </main>

      <?php
      // Footer content
      ?>
      <footer id="footer">
        <section id="supplementalLinks" class="programLanding__footerLinks">
            <?php get_partial('links', 'supplement-links'); ?>
          </section>
        <section id="newsletterSignup" class="programLanding__callToAction">
          <?php get_partial('media', 'newsletterSignup'); ?>
        </section>
        <section id="footerContent" class="programLanding__footerContent">
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