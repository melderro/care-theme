<?php // Program Resource content ?>
<div class="o-programResources">
  <div class="m-programResources__contentimage">
    <img class="m-programResources__image" src="<?php echo get_acf_image( get_field('program_content_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="m-programResources__content">
    <h2 class="m-programResources__title">
      <?php the_field('program_resources_title'); ?>
    </h2>
  <ul class="o-programResources__list">
    <a>
      <li>
      </li>
    </a>
  </ul>
  </div>
</div>
