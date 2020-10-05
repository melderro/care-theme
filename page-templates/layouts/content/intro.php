<?php // Introductory paragraph content ?>
<div class="o-introContent">
  <div class="m-bodyContent__contentimage o-introContent__contentimage">
    <img class="o-introContent__image" src="<?php echo get_acf_image( get_field('intro_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="m-bodyContent__content o-introContent__content">
    <h3 class="o-introContent__subtitle">
      <?php the_field('intro_subtitle'); ?>
    </h3>
    <h1 class="o-introContent__title">
      <?php the_field('intro_title'); ?>
    </h1>
    <div class="o-introContent__paragraph">
      <?php the_field('intro_text'); ?>      
    </div>
    <?php if ( get_field('intro_link_title') ) : ?>
         
    <div class="o-introContent__link">
      <a class="a-roundLink o-introlink" href="<?php the_field('intro_link'); ?>">
      <img class="o-introContent__linkimage" src="<?php echo get_acf_image( get_field('intro_link_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
      <span><?php the_field('intro_link_title'); ?></span>
      </a>  
    </div>
    <?php endif; ?>
  </div>
</div>
