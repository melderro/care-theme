<?php // Main Category Case Study content ?>
<div class="o-maincategoryCaseStudy">
  <div class="m-bodyContent__content m-maincategoryCaseStudy__content">
    <h3 class="m-bodyContent__subtitle m-maincategoryCaseStudy__subtitle">
      <?php the_field('main_category_case_study_subtitle'); ?>
    </h3>
    <h2 class="m-bodyContent__title m-maincategoryCaseStudy__title">
      <?php the_field('main_category_case_study_title'); ?>
    </h2>
    <div class="m-bodyContent__paragraph m-maincategoryCaseStudy__paragraph">
      <?php the_field('main_category_case_study_text'); ?>  
    </div>
    <div class="o-introContent__link m-maincategoryCaseStudy__link">
      <a class="a-roundLink o-maincategoryCaseStudylink" href="<?php the_field('main_category_case_study_link'); ?>">
      <span><?php the_field('main_category_case_study_link_title'); ?></span>
      </a>  
    </div>
  </div>
  <div class="m-bodyContent__contentimage m-maincategoryCaseStudy__contentimage ">
    <img class="m-bodyContent__image m-maincategoryCaseStudy__image" src="<?php echo get_acf_image( get_field('main_category_case_study_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
</div>
