<?php // Body paragraph content ?>
<div class="o-bodyContent">
  <div class="m-bodyContent__contentimage">
    <img class="m-bodyContent__image" src="<?php echo get_acf_image( get_field('program_content_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="m-bodyContent__content">
    <h3 class="m-bodyContent__subtitle">
    </h3>
    <h1 class="m-bodyContent__title">
      <?php the_field('program_content_title'); ?>
    </h1>
    <div class="m-bodyContent__paragraph">
      <?php the_field('program_content_text'); ?>      
    </div>
  </div>
  <div class="m-bodyContent__contentcallout">
    <div class="m-bodyContent__callouttext">
    </div>
    <div class="m-bodyContent__calloutname">
    </div>
    <div class="m-bodyContent__calloutsource">
    </div>
  </div>  
</div>
