<?php // Body paragraph content ?>
<div class="o-bodyContent">
  <div class="m-bodyContent__content m-programbodyContent_contenttop">
    <h2 class="m-bodyContent__title">
      <?php the_field('program_top_content_title'); ?>
    </h2>
    <div class="m-bodyContent__paragraph">
      <?php the_field('program_top_content_text'); ?>  
    </div>
  </div>
  <div class="m-bodyContent__contentimage m-programbodyImage">
    <img class="m-bodyContent__image" src="<?php echo get_acf_image( get_field('program_top_content_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>   
</div>
