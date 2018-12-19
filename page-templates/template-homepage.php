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
      <section id="navigationMenu" class="homepage__nav">
        <?php get_partial('navigation', 'menu'); ?>
      </section>
      <section id="featureSlider" class="homepage__featureSlider">
          <?php get_partial('slider', 'feature'); ?>
      </section>
    </header>

    <?php
    // Main content area
    ?>
    <main>
      <section id="homepageintroContent" class="homepage__intro">
        <?php get_partial('content', 'home-intro'); ?>
      </section>
      <section id="homepagePrograms" class="homepage__programs">
        <?php get_partial('links', 'home-programs'); ?>
      </section>
      <section id="homepagePeerRecovery" class="homepage__peerrecovery">
        <?php get_partial('content', 'home-peerrecovery'); ?>
      </section>
      <section id="homepagePromotionlinks" class="homepage__promotionlinks">
        <?php get_partial('links', 'home-promotionlinks'); ?>
      </section>
    </main>

    <?php
    // Footer content
    ?>
    <footer id="footer">
      <section id="supplementalLinks" class="homepage__footerLinks">
          <?php get_partial('links', 'supplement-links'); ?>
        </section>
      <section id="newsletterSignup" class="homepage__callToAction">
        <?php get_partial('media', 'newsletterSignup'); ?>
      </section>
      <section id="footerContent" class="homepage__footerContent">
        <?php get_partial('content', 'footer'); ?>
      </section>
    </footer>

    <?php
    // Footer meta data and scripts. Includes the WP admin footer, etc.
    get_partial('meta', 'foot');
    ?>
  </body>
</html>