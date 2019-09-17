<?php // Body paragraph content ?>
<div class="o-bodyContent">
  <div class="m-bodyContent__contentimage m-programbodyImage">
    <?php echo get_acf_image_srcset( get_field('program_bottom_content_image'), 'lazyload m-bodyContent__image'); ?>
  </div>
  <div class="m-bodyContent__content m-programbodyContent_contentbottom">
    <div class="m-bodyContent__paragraph">
      <?php 
      add_filter ('acf_the_content', 'wpautop');
      the_field('program_bottom_content_text');
      remove_filter ('acf_the_content', 'wpautop');
      ?>  
    </div>
  </div>
   
</div>
