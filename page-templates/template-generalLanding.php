<?php
/**
 * Template Name: General Content
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
        <section id="navigationMenu" class="generalLanding__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
        <section id="topBanner" class="generalLanding__topBanner">
            <?php get_partial('media', 'general-topbanner'); ?>
        </section>
      </header>

      <?php
      // Main content area
      ?>
      <main>
        <section id="generalContent" class="generalLanding__bodyContent">
          <?php get_partial('content', 'general'); ?>
        </section>
        <section id="generalPhotos" class="generalLanding__photoSlider">
          <?php get_partial('slider', 'general-photos'); ?>
        </section>
        <section id="generalSecondary" class="generalLanding__Secondary">
          <?php get_partial('content', 'general-secondary'); ?>
        </section>
        <section id="generalRelatedTopics" class="generalLanding__relatedTopics">
          <?php get_partial('links', 'program-related-topic-links'); ?>
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