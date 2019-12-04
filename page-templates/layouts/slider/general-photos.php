<?php // Genearl Body paragraph content 

  if(have_rows('general_photo_slider')) :
?>
<div class="o-generalbodyPhotos">
  <ul class="m-generalbodyPhotos" class="preload">
    <?php
      while(have_rows('general_photo_slider')):the_row();
    ?>
    <li>
      <?php 
        echo get_acf_image_srcset( get_sub_field('general_photo_slider_image'), 'lazyload m-generalbodyContent__calloutimage', '375w'); 
      ?>
    </li>
    <?php
      endwhile;
    ?>
  </ul>
</div>
</li>
<?php
  endif;
?>