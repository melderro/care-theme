<?php // Introductory paragraph content ?>
<div class="o-introContent">
  <div class="m-bodyContent__contentimage o-introContent__contentimage">
    <img class="o-introContent__image" src="<?php echo get_acf_image( get_field('intro_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="m-bodyContent__content o-introContent__content">
    <h3 class="o-introContent__subtitle">
      Dynamically pull in News Category
    </h3>
    <h1 class="o-introContent__title">
      <?php the_field('intro_title'); ?>
    </h1>
    <div class="o-introContent__paragraph">
      <?php the_field('intro_text'); ?>      
    </div>
  </div>
</div>
