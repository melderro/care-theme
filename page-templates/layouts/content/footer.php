<div class="o-footerContent">
  <div class="o-footerContentBlock o-footerContent__logo">
   <img class="m-footerContent__image" src="<?php echo get_acf_image( get_field('footer_site_logo', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> " />
  </div>

  <div class="o-footerContentBlock o-footerContent__contactLinks">
    <h3 class="m-footerContent__contactLinksTitle">Contact Us</h3>
    <ul class="m-footerContent__contactLinks">
    <?php if ( have_rows('contact_links', 'option') ) : ?>      
    <?php while( have_rows('contact_links', 'option') ) : the_row(); ?> 
      <li><a href="<?php the_sub_field('contact_links_link', 'option'); ?>">
        <img src="<?php echo get_acf_image( get_sub_field('contact_links_icon', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
        <span><?php the_sub_field('contact_links_link_title', 'option'); ?></span>
      </a></li>
    <?php endwhile; ?>      
    <?php endif; ?>
  </ul>
  </div>

  <div class="o-footerContentBlock o-footerContent__hours">
    <h3 class="m-footerContent__contactLinksTitle">Hours</h3>
    <ul class="m-footerContent__contactLinks">
      <li>Monday: 8:30am-8:30pm</li>
      <li>Tuesday: 8:30am-8:30pm</li>
      <li>Wednesday: 8:30am-5pm</li>
      <li>Thursday: 8:30am-8:30pm</li>
      <li>Friday: 8:30am-1pm</li>
    </ul>
  </div>

  <div class="o-footerContentBlock o-footerContent__socialLinks">
    <h3 class="m-footerContent__socialLinksTitle">Follow Us</h3>
    <ul class="m-footerContent__socialLinks">
    <?php if ( have_rows('social_links', 'option') ) : ?>      
    <?php while( have_rows('social_links', 'option') ) : the_row(); 
        $type = get_sub_field('footer_social_type', 'option');
        if($type == 'Facebook') :
          $link = get_sub_field('footer_social_facebook', 'option');
          $svg = return_svg('social-facebook');
        elseif ($type == 'Linked In'):
          $link = get_sub_field('footer_social_linked_in', 'option');
          $svg = return_svg('social-linkedin');
        elseif ($type == 'Twitter'):
          $link = get_sub_field('footer_social_twitter', 'option');
          $svg = return_svg('social-twitter');    
        elseif ($type == 'Youtube'):
          $link = get_sub_field('footer_social_youtube', 'option');
          $svg = return_svg('social-youtube');  
        elseif ($type == 'Instagram'):
          $link = get_sub_field('footer_social_instagram', 'option');
          $svg = return_svg('social-instagram');
        endif;;
    ?> 
      <li>
        <a href="<?php echo $link; ?>" target="_blank">
         <?php echo $svg; ?>
        </a
      ></li>
    <?php endwhile; ?>      
    <?php endif; ?>
  </ul>    
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
<div class="o-footerCopyright">
  <p class="o-footerCopyright__content">
    © Copyright <?php echo date('Y'); ?> Care of Southeastern Michigan. All rights reserved.
  </p>
  <p class="o-footerCopyright__content">
            <a class="a-footerLink a-footerLink--copyright" href="/site-map/" target="_blank">Sitemap</a>
              <a class="a-footerLink a-footerLink--copyright" href="/terms-of-service/" target="_blank">Terms</a>
          <span class="o-footerCopyright__fwd">
      Website Design by <a class="o-footerCopyright__link" href="https://www.designfwd.com/" target="_blnak">FWD</a>
    </span>
  </p>
</div>