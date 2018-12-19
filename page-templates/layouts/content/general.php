<?php // Genearl Body paragraph content ?>
<div class="o-generalbodyContent">
  
  <div class="m-generalbodyContent__content">
    <h3 class="m-generalbodyContent__subtitle">
      
      <?php the_field('general_top_content_subtitle'); ?>
    </h3>
    <h2 class="m-generalbodyContent__title">
      <?php the_field('general_top_content_title'); ?>
    </h2>
    <div class="m-generalbodyContent__paragraph">
      <?php the_field('general_top_content_text'); ?>  
    </div>
  </div>

  <div class="m-generalbodyContent__contentcallout">
    <div class="m-generalbodyContent__calloutcontainer">
      <div class="m-generalbodyContent__calloutimagecontainer">
        <img class="m-generalbodyContent__calloutimage" src="<?php echo get_acf_image( get_field('general_content_callout_source_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
      </div>
      <div class="m-generalbodyContent__calloutcontent">
      <?php the_field('general_content_callout_text'); ?>
        <div class="m-generalbodyContent__calloutnamecontainer">   
          <span class="m-bodyContent__calloutname m-generalbodyContent__calloutname">
          <?php the_field('general_content_callout_source_name'); ?>,
          </span>
          <span class="m-bodyContent__calloutsource m-generalbodyContent__calloutsource">
          <?php the_field('general_content_callout_source'); ?>
          </span>
        </div>
      </div>
    </div>
  </div>  

</div>
