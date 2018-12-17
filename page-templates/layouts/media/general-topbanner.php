<?php // Top Banner ?>
<div class="o-pageBanner">
  <div class="o-pageBanner__titlecontent">  
    <h3 class="o-pageBanner__subtitle">
      <?php the_field('general_top_banner_subtitle'); ?>
    </h3>
    <h1 class="o-pageBanner__title">
      <?php the_field('general_top_banner_title'); ?>
    </h1>
    <div class="o-pageBanner__text"><?php the_field('general_top_banner_text'); ?></div>
  </div>
  <img class="o-pageBanner__image" src="<?php echo get_acf_image( get_field('general_top_banner_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
</div>
