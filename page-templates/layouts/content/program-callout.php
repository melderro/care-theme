<?php // Body paragraph content ?>
<div class="o-bodyContent">

  <div class="m-bodyContent__contentcallout">
    <div class="m-bodyContent__callouttext">
      <?php the_field('program_content_callout_text'); ?>
    </div>
    <div class="m-bodyContent__calloutauthor">
      <img class="m-bodyContent__calloutimage" src="<?php echo get_acf_image( get_field('program_content_callout_source_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
      <span class="m-bodyContent__calloutname"><?php the_field('program_content_callout_source_name'); ?></span>
      <span class="m-bodyContent__calloutsource">
        <?php the_field('program_content_callout_source'); ?>
      </span>
    </div>
  </div> 
  
</div>
