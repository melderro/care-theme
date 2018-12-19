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
      <li>
        <a>list item</a>
      </li>
      <li>
        <a>list item</a>
      </li>
      <li>
        <a>list item</a>
      </li>
      <li>
        <a>list item</a>
      </li>
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
        Events & Classes
      </h2>
    <ul class="o-programResources__list">
      <li>
        <a>list item</a>
      </li>
      <li>
        <a>list item</a>
      </li>
      <li>
        <a>list item</a>
      </li>
      <li>
        <a>list item</a>
      </li>
    </ul>
    </div>
  </div>
</div>
