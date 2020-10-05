<?php // Introductory paragraph content ?>
<div class="o-homeintroContent">
  <div class="o-homeintroContent__datablocks">
    <?php
      if(have_rows('data_and_statistics_blocks')):
        while(have_rows('data_and_statistics_blocks')): the_row();
    ?>
    <div class="m-home__datablocks datablocks-left ">
      <img class="m-home__datablocks__image" src="<?php echo get_acf_image( get_field('data_and_statistics_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/> 
      <div class="m-home__datablocks__text">
        <?php the_sub_field('data_and_statistics_text'); ?>
      </div>
    </div>
    <?php
      endwhile;
    endif;
    ?>
    <div class="m-home__datablocks datablocks-right ">
      <img class="m-home__datablocks__image" src="<?php echo get_acf_image( get_field('intro_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/> 
      <div class="m-home__datablocks__text">
        724 Adults & Youth Served Through Behavioral Health Assessments & Counseling
      </div>
    </div>
  </div>
  <div class="o-homeintroContent__maincontent">
    <h3 class="o-homeintroContent__subtitle">
      Who we are
    </h3>
    <h1 class="o-homeintroContent__title">
      Heading About Care
    </h1>
    <div class="o-homeintroContent__paragraph">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tristique tincidunt velit, at fermentum diam. Nulla rutrum porttitor interdum. Integer pellentesque eleifend massa sit amet facilisis. In interdum facilisis odio, ut pretium urna dapibus a. Nunc eu posuere sem. Sed eleifend condimentum faucibus. Morbi cursus ac purus ut maximus. Proin.     
    </div>
    <div class="o-homeintroContent__link">
      <a class="a-roundLink o-homeintrolink">
      <span>Learn More</span>
      </a>  
    </div>
  </div>
</div>
