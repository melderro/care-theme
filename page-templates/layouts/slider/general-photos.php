<?php // Genearl Body paragraph content 
  if(have_rows('general_photo_slider')):
?>
<div class="o-generalbodyPhotos">
  <ul class="m-generalbodyPhotos" class="preload">
    <?php
      while(have_rows('general_photo_slider')):the_row();
    ?>
    <li>
      <img class="m-generalbodyPhotos__image" src="<?php echo get_acf_image( get_sub_field('general_photo_slider_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/> 
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