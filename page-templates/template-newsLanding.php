<?php
/**
 * Template Name: News Landing Content
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
        <section id="navigationMenu" class="newsLanding__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>    
      </header>

      <?php
      // Main content area
      ?>
      <main>
        <section id="newslandingIntroContent" class="newsLanding__intro">
          <?php get_partial('content', 'news-intro'); ?>
        </section>
        <section id="programBodyContent" class="newsLanding__bodyContentcallout">
          <?php get_partial('content', 'program-callout'); ?>
        </section>
        <section id="programBodyContent" class="newsLanding__bodyContentbottom">
          <?php get_partial('content', 'news-bottom'); ?>
        </section>
        <section id="newslandingSlideshow" class="newsLanding__bodyContentbottom">
          <?php get_partial('slider', 'general-photos'); ?>
        </section>      
      </main>

      <?php
      // Footer content
      ?>
      <footer id="footer">
        <section id="supplementalLinks" class="programLanding__footerLinks">
          <?php get_partial('links', 'blog-supplement-links'); ?>
        </section>
        <section id="DonateSignup" class="newsLanding__DonateLink">
          <?php get_partial('links', 'donateLink'); ?>
        </section>
        <section id="newsletterSignup" class="newsLanding__callToAction">
          <?php get_partial('media', 'newsletterSignup'); ?>
        </section>
        <section id="footerContent" class="newsLanding__footerContent">
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