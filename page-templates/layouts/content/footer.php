<div class="o-footerContent">
  <div class="o-footerContentBlock o-footerContent__logo">
   <img class="m-footerContent__image" src="<?php echo get_acf_image( get_field('footer_site_logo', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> " />
  </div>

  <div class="o-footerContentBlock o-footerContent__contactLinks">
    <h3 class="m-footerContent__contactLinksTitle">Contact Us</h3>
    <ul class="m-footerContent__contactLinks">
    <?php if ( have_rows('contact_links') ) : ?>      
    <?php while( have_rows('contact_links') ) : the_row(); ?> 
      <li><a href="<?php the_sub_field('contact_links_link'); ?>">
        <img src="<?php echo get_acf_image( get_sub_field('contact_links_icon', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
        <span><?php the_sub_field('contact_links_link_title'); ?></span>
      </a></li>
      <li><a href="<?php the_sub_field('contact_links_link'); ?>">
        <img src="<?php echo get_acf_image( get_sub_field('contact_links_icon', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
        <span><?php the_sub_field('contact_links_link_title'); ?></span>
      </a></li>
      <li><a href="<?php the_sub_field('contact_links_link'); ?>">
        <img src="<?php echo get_acf_image( get_sub_field('contact_links_icon', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
        <span>"<?php the_sub_field('contact_links_link_title'); ?></span>
      </a></li>
    <?php endwhile; ?>      
    <?php endif; ?>
  </ul>
  </div>

  <div class="o-footerContentBlock o-footerContent__socialLinks">
    <h3 class="m-footerContent__socialLinksTitle">Follow Us</h3>
  </div>

<div class="o-footerContent">
<?php
    
    wp_nav_menu( array(
      'container'       => 'nav',
      'container_class' => 'm-footerLinks',
      'menu_class'      => 'm-footerContentLinks',    
      'theme_location' => 'footer_nav'
    ));
  ?>
</div>
