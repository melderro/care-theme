<?php // Footer Supplement Links ?>
<div class="o-footerSupplementLinks">
  <div class="m-footerSupplementLinks">
  <img class="m-footerSupplementLinks__image" src="<?php echo get_acf_image( get_field('footer_donate_icon', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  <h3 class="m-footerSupplementLinks__subtitle">
    <?php the_field('footer_donate_subtitle', 'option'); ?>
  </h3>
  <h1 class="m-footerSupplementLinks__title">
    <?php the_field('footer_donate_title', 'option'); ?>
  </h1>
  <div class="m-footerSupplementLinks__text">
    <?php the_field('footer_donate_text', 'option'); ?>
  </div>
  <a class="a-roundLink o-SupplementLinks" href="<?php the_field('footer_donate_link', 'option'); ?>"><?php the_field('footer_donate_link_title', 'option'); ?></a>
  </div>
  <div class="m-footerSupplementLinks">
  <img class="m-footerSupplementLinks__image" src="<?php echo get_acf_image( get_field('footer_blog_icon', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  <?php // get post info

    $get_theme_post = 0;

    $current_post_category = get_field('page_post_category');
    if(!$current_post_category->count) :
      //check child
      $child_categories = get_categories(
          array('parent' => $current_post_category->term_id)
      );
      if($child_categories) :
        $post_category = $child_categories[1]->term_id;
      endif;


      if(!$post_category) :
        //check parent
        $parent_post_category = get_term($current_post_category->parent);
        if(!$parent_post_category->count) :
          //if nothing in parent, grab from theme options
          $get_theme_post = 1;
        else: 
          $post_category = $parent_post_category->term_id;
        endif;
      endif;
    else :
      $post_category = $current_post_category->term_id;
    endif;
    if($get_theme_post) :
      $theme_post = get_field('footer_blog_article', 'option');
      setup_postdata($theme_post);
      $title = $theme_post->post_title;
      $excerpt = get_the_excerpt($theme_post->ID);
    else :
      $args = array(
          'posts_per_page' => 1,
          'offset'=> 0,
          'category__in' => $post_category,
      );

      $myposts = get_posts($args);
      setup_postdata($myposts[0]);
      $title = $myposts[0]->post_title;
      $excerpt = get_the_excerpt($myposts[0]->ID);
      
    endif;

  ?>
  <h3 class="m-footerSupplementLinks__subtitle">
    <?php the_field('footer_blog_subtitle', 'option'); ?>
  </h3>
  <h1 class="m-footerSupplementLinks__title">
    <?php echo $title; ?>
  </h1>
  <div class="m-footerSupplementLinks__text">
    <?php echo $excerpt; ?>
  </div>
  <a class="a-roundLink o-SupplementLinks" href="<?php the_field('footer_blog_link', 'option'); ?>"><?php the_field('footer_blog_link_title', 'option'); ?></a>
  </div>
</div>
