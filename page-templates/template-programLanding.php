<?php
/**
 * Template Name: Program Landing Content
 * Description: Program Landing content page
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
        <section id="navigationMenu" class="programLanding__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
      </header>

      <?php
      // Main content area
      ?>
      <main>
        <section id="programIntroContent" class="programLanding__intro">
          <?php get_partial('content', 'intro'); ?>
        </section>
        <section id="programBodyContent" class="programLanding__bodyContenttop">
          <?php get_partial('content', 'program-top'); ?>
        </section>
        <section id="programBodyContent" class="programLanding__bodyContentcallout">
          <?php get_partial('content', 'program-callout'); ?>
        </section>
        <section id="programBodyContent" class="programLanding__bodyContentbottom">
          <?php get_partial('content', 'program-bottom'); ?>
        </section>
        <section id="programResourceLinks" class="programLanding__resourceLinks">
          <?php get_partial('links', 'program-resource-links'); ?>
        </section>
        <section id="programRelatedTopics" class="programLanding__relatedTopics">
          <?php get_partial('links', 'program-related-topic-links'); ?>
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