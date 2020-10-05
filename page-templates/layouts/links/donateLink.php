<?php // Home program paragraph content and links ?>
<div class="o-donateLink">
  <div class="o-donateLink__contentimage">
    <img class="o-donateLink__image" src="<?php echo get_acf_image( get_field('footer_donate_icon', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="o-donateLink__content">
    <h3 class="o-donateLink__subtitle">
      <?php the_field('footer_donate_subtitle', 'option'); ?>
    </h3>
    <h1 class="o-donateLink__title">
      <?php the_field('footer_donate_title', 'option'); ?>
    </h1>
    <div class="o-donateLink__paragraph">
    <?php the_field('footer_donate_text', 'option'); ?>
    </div>
    <div class="o-donateLink__link">
      <a class="a-roundLink o-donateLinklink" href="<?php the_field('footer_donate_link', 'option'); ?>"><?php the_field('footer_donate_link_title', 'option'); ?></a>
    </div>
  </div>
</div>
