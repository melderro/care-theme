<?php // Footer Supplement Links ?>
<div class="o-footerSupplementLinks">
  <div class="m-footerSupplementLinks">
  <img class="m-footerSupplementLinks__image" src="<?php echo get_acf_image( get_field('footer_donate_icon', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  <h3 class="m-footerSupplementLinks__subtitle">
    <?php the_field('footer_donate_subtitle', 'option'); ?>
  </h3>
  <h1 class="m-footerSupplementLinks__title">
    <?php the_field('footer_donate_title', 'option'); ?>
  </h1>
  <div class="m-footerSupplementLinks__text">
    <?php the_field('footer_donate_text', 'option'); ?>
  </div>
  <a class="a-roundLink o-SupplementLinks" href="<?php the_field('footer_donate_link', 'option'); ?>"><?php the_field('footer_donate_link_title', 'option'); ?></a>
  </div>
  <div class="m-footerSupplementLinks">
  <img class="m-footerSupplementLinks__image" src="<?php echo get_acf_image( get_field('footer_blog_icon', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  <h3 class="m-footerSupplementLinks__subtitle">
    <?php the_field('footer_blog_subtitle', 'option'); ?>
  </h3>
  <h1 class="m-footerSupplementLinks__title">
    <?php the_field('footer_blog_title', 'option'); ?>
  </h1>
  <div class="m-footerSupplementLinks__text">
    <?php the_field('footer_blog_text', 'option'); ?>
  </div>
  <a class="a-roundLink o-SupplementLinks" href="<?php the_field('footer_blog_link', 'option'); ?>"><?php the_field('footer_blog_link_title', 'option'); ?></a>
  </div>
</div>
