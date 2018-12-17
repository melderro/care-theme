<?php // Home program paragraph content and links ?>
<div class="o-homePrograms">
  <div class="m-bodyContent__contentimage o-homeProgramsBlock">
    <img class="m-bodyContent__image" src="<?php echo get_acf_image( get_field('home_program_text_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="m-bodyContent__content o-homeProgramsBlock">
    <h3 class="m-bodyContent__subtitle">
      <?php the_field('home_program_text_subtitle'); ?>
    </h3>
    <h2 class="m-bodyContent__title">
      <?php the_field('home_program_text_title'); ?>
    </h2>
    <div class="m-bodyContent__paragraph">
      <?php the_field('home_program_text_text'); ?>  
    </div>
  </div>  
</div>
