<?php // Top Banner ?>
<div class="o-pageBanner">
  <div class="o-pageBanner__titlecontent">  
    <h3 class="o-pageBanner__subtitle">
      <?php the_field('main_category_top_banner_subtitle'); ?>
    </h3>
    <h1 class="o-pageBanner__title">
      <?php the_field('main_category_top_banner_title'); ?>
    </h1>
    <div class="o-pageBanner__link">
      <a class="a-roundLink o-pageBannerlink" href="<?php the_field('main_category_top_banner_link'); ?>">
      <img class="o-pageBanner__linkimage" src="<?php echo get_acf_image( get_field('main_category_top_banner_link_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
<<<<<<< HEAD
=======
     
     
>>>>>>> js and responsive top banner image
      <span><?php the_field('main_category_top_banner_link_title'); ?></span>
      </a>  
    </div>
  </div>
<<<<<<< HEAD
  <img class="o-pageBanner__image" src="<?php echo get_acf_image( get_field('main_category_top_banner_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
=======
    <?php echo get_acf_image_srcset(get_field('main_category_top_banner_image'), $class='o-pageBanner__image'); ?>
>>>>>>> js and responsive top banner image
</div>
