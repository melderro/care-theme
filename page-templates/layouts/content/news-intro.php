<?php // Introductory paragraph content 
  $intro_image = get_field('intro_image');
?>
<div class="o-introContent">
  <div class="m-bodyContent__contentimage o-introContent__contentimage">
    
    <?php 
      if(get_field('intro_image')): 
        echo get_acf_image_srcset( get_field('intro_image'), 'lazyload m-articleGridBlock__imageContainer'); 
      else :
        echo get_acf_image_srcset( get_field('news_intro_image', 'option'), 'lazyload m-articleGridBlock__imageContainer'); 
      endif;
    ?>
  </div>
  <div class="m-bodyContent__content o-introContent__content">
    <h3 class="o-introContent__subtitle">    
      <?php the_category(", "); ?>
    </h3>
    <h1 class="o-introContent__title">
      <?php the_title(); ?>
    </h1>
    <div class="o-introContent__paragraph">
      <?php the_field('intro_text'); ?>      
    </div>
  </div>
</div>
