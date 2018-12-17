<?php // Navigation menu with links and search functionality  ?>
<nav class="o-navigationMenu">
  <a class="o-navigationMenu__link" href="<?php echo get_site_url(); ?>">
  <img class="o-navigationMenu__image" src="<?php echo get_acf_image( get_field('top_site_logo', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> " />
  </a>  
  <?php
    
    wp_nav_menu( array(
      'container'       => 'div',
      'container_class' => 'o-navigationMenu__topRow',
      'menu_class'      => 'm-navigationRow m-navigationRow--upper',    
      'theme_location' => 'top_nav',
    ));

    wp_nav_menu( array(
      'container'       => 'div',
      'container_class' => 'o-navigationMenu__bottomRow',
      'menu_class'      => 'm-navigationRow',    
      'theme_location' => 'primary_nav'
    ));    
  ?>  
</nav>
