<?php // Main Category Program Links ?>
<div class="o-maincategoryProgramLinks">
  <ul class="m-maincategoryProgramLinks">
  <?php if ( have_rows('main_category_program_links') ) : ?>      
        <?php while( have_rows('main_category_program_links') ) : the_row(); ?> 
    <li><a href="<?php the_sub_field('main_category_program_links_link'); ?>">
      <img class="m-maincategoryProgramLinks__image" src="<?php echo get_acf_image( get_sub_field('main_category_program_links_icon'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
      <span><?php the_sub_field('main_category_program_links_title'); ?></span>
    </a></li>    
  <?php endwhile; ?>      
      <?php endif; ?>
      </ul>
</div>
