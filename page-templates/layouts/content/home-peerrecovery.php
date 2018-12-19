<?php // Home Peer Recovery Content ?>
<div class="o-homePeerRecovery">
  <div class="o-homePeerRecovery__block">
    <h3 class="o-homePeerRecovery__subtitle">
      <?php the_field('home_peerrecovery_text_subtitle'); ?>
    </h3>
    <h2 class="o-homePeerRecovery__title">
      <?php the_field('home_peerrecovery_text_title'); ?>
    </h2>
    <div class="o-homePeerRecovery__text">
      <?php the_field('home_peerrecovery_text_text'); ?>
    </div>
    <div class="o-homePeerRecovery__link">
      <a class="a-roundLink o-homepeerrecoverylink" href="<?php the_field('home_peerrecovery_link'); ?>">
      <span><?php the_field('home_peerrecovery_link_title'); ?></span>
      </a>  
    </div>
  </div>
  <div class="o-homePeerRecovery__block homepeerrecoveryList">
    <ul class="m-homePeerRecovery">
      <?php
        if(have_rows('home_peerrecovery_text_list')):
          while(have_rows('home_peerrecovery_text_list')): the_row();
      ?>
      <li><a>
        <img class="m-homePeerRecovery__image" src="<?php echo get_acf_image( get_sub_field('home_peerrecovery_text_list_icon'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/> 
        <span><?php the_sub_field('home_peerrecovery_text_list_text'); ?><span>
      </a></li>
      <?php
        endwhile;
       endif;
      ?>
    </ul>
  </div>
</div>
