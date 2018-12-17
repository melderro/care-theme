<?php // Introductory paragraph content ?>
<div class="o-homeintroContent">
  <div class="o-homeintroContent__datablocks">
    <?php
      if(have_rows('data_and_statistics_blocks')):
        while(have_rows('data_and_statistics_blocks')): the_row();
    ?>
    <div class="m-home__datablocks">
      <img class="m-home__datablocks__image" src="<?php echo get_acf_image( get_sub_field('data_and_statistics_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/> 
      <div class="m-home__datablocks__text">
        <?php the_sub_field('data_and_statistics_text'); ?>
      </div>
    </div>
    <?php
      endwhile;
    endif;
    ?>
  </div>

  <div class="o-homeintroContent__maincontent">
    <h3 class="o-homeintroContent__subtitle">
      <?php the_field('home_intro_text_subtitle'); ?>
    </h3>
    <h1 class="o-homeintroContent__title">
      <?php the_field('home_intro_text_title'); ?>
    </h1>
    <div class="o-homeintroContent__paragraph">
      <?php the_field('home_intro_text_text'); ?>
    </div>
    <div class="o-homeintroContent__link">
      <a class="a-roundLink o-homeintrolink" href="<?php the_field('home_intro_link'); ?>">
      <span><?php the_field('home_intro_link_title'); ?></span>
      </a>  
    </div>
  </div>
</div>
