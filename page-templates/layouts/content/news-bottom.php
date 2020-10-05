<?php // Body paragraph content ?>
<div class="o-newsbodyContent">
  <div class="m-bodyContent__content m-programbodyContent_contentbottom">
    <div class="m-bodyContent__paragraph">
      <?php the_field('news_bottom_content_text'); ?>  
    </div>
    <div class="m-bodyContent__contentimage m-newsbodyImage">
    <?php echo get_acf_image_srcset( get_field('news_bottom_content_image'), 'lazyload m-bodyContent__image'); ?>
  </div>    
  </div>   
</div>
