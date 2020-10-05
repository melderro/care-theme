<?php
/**
 * Template Name: Blog Archive
 * Description: News content page
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
        <section id="navigationMenu" class="newsCategory__nav">
          <?php get_partial('navigation', 'menu'); ?>
        </section>
        <section id="topBanner" class="newsCategory__topBanner">
            <?php get_partial('media', 'static-topbanner'); ?>
        </section>
      </header>

      <?php
      // Main content area
      ?>
      <main>
        <?php 
         if(!is_page('success-stories')) :
        ?>
        <section id="newsFilter" class="newsCategory__filter">
          <?php get_partial('links', 'newsfilter'); ?>
        </section>
        <?php endif; ?>
        <section id="newsArticleGrid" class="newsCategory__articleGrid">
          <?php get_partial('content', 'article-grid-archive'); ?>
        </section>
      </main>

      <?php
      // Footer content
      ?>
      <footer id="footer">
        <section id="supplementalLinks" class="newsCategory__footerLinks">
            <?php get_partial('links', 'supplement-links'); ?>
          </section>
        <section id="newsletterSignup" class="newsCategory__callToAction">
          <?php get_partial('media', 'newsletterSignup'); ?>
        </section>
        <section id="footerContent" class="newsCategory__footerContent">
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