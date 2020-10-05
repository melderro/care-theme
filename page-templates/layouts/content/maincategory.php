<?php // Main Category Body paragraph content ?>
<div class="o-maincategorybodyContent">
  <div class="m-bodyContent__contentimage m-maincategorybodyContent__contentimage">
    <img class="m-bodyContent__image m-maincategorybodyContent__image" src="<?php echo get_acf_image( get_field('main_category_secondary_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="m-bodyContent__content m-maincategorybodyContent__content">
    <h3 class="m-bodyContent__subtitle m-maincategorybodyContent__subtitle">
      <?php the_field('main_category_secondary_subtitle'); ?>
    </h3>
    <h2 class="m-bodyContent__title m-maincategorybodyContent__title">
      <?php the_field('main_category_secondary_title'); ?>
    </h2>
    <div class="m-bodyContent__paragraph m-maincategorybodyContent__paragraph">
      <?php the_field('main_category_secondary_text'); ?>  
    </div>
  </div>
</div>
