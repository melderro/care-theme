<?php // Program Resource content ?>
<div class="o-programResources">
  <div class="m-programResourcesGroup o-programResources--events">
    <div class="m-programResources__contentimage">
      <img class="m-programResources__image" src="<?php echo get_acf_image( get_field('event_icon', 'options'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
    </div>
    <div class="m-programResources__content">
      <h2 class="m-programResources__title o-programResources--events">
        <?php the_field('program_resources_title'); ?>
        Events & Classes
      </h2>
    <ul class="o-programResources__list">
      <?php get_related_events(); ?>
    </ul>
    </div>
  </div>

  <div class="m-programResourcesGroup o-programResources--resources">
    <div class="m-programResources__contentimage">
      <img class="m-programResources__image" src="<?php echo get_acf_image( get_field('resource_icon', 'options'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
    </div>
    <div class="m-programResources__content">
      <h2 class="m-programResources__title">
        <?php the_field('program_resources_title'); ?>
        Resources
      </h2>
    <ul class="o-programResources__list">
    <?php
      if(have_rows('program_related_resources')) :
        while(have_rows('program_related_resources')) : the_row();
          $file = get_sub_field('program_related_resources_file');
          $label = get_sub_field('program_related_resources_label');
    ?>
      <li>
        <a href="<?php echo $file;?>" target="_blank">
          <?php echo $label; ?>
        </a>
      </li>
      <?php 
        endwhile;
      elseif(have_rows('uploads', 'option')) :
          while(have_rows('uploads', 'option')) : the_row();
            $file = get_sub_field('uploads_file', 'option');
            $label = get_sub_field('uploads_label');
      ?>
      <li>
        <a href="<?php echo $file;?>" target="_blank">
          <?php echo $label; ?>
        </a>
      </li>
        <?php 
          endwhile;
        else :
      ?>
      <li>
        <a>There are currently no resources.</a>
      </li>
      <?php endif; ?>
    </ul>
    </div>
  </div>
</div>
