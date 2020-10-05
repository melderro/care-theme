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

  <div class="m-bodyContent__contentcallout">
    <div class="m-bodyContent__callouttext">
      <?php the_field('program_content_callout_text'); ?>
    </div>
    <div class="m-bodyContent__calloutauthor">
      <img class="m-bodyContent__calloutimage" src="<?php echo get_acf_image( get_field('program_content_callout_source_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
      <span class="m-bodyContent__calloutname"><?php the_field('program_content_callout_source_name'); ?>
</span>
      <span class="m-bodyContent__calloutsource">
        <?php the_field('program_content_callout_source'); ?>
      </span>
    </div>
  </div> 

  <div class="m-bodyContent__contentimage m-programbodyImage">
    <img class="m-bodyContent__image" src="<?php echo get_acf_image( get_field('program_bottom_content_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="m-bodyContent__content m-programbodyContent_contentbottom">
    <div class="m-bodyContent__paragraph">
      <?php the_field('program_bottom_content_text'); ?>  
    </div>
  </div>
   
</div>
