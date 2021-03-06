<?php // News Categories Filter ?>
<div class="o-articleGrid">
<?php
  $blog_category = get_field('blog_category');
  if(!$blog_category) :
    $tax_query = '';
    else:
      $tax_query = array(
        array(
          'taxonomy' => 'testimonial',
          'field'    => 'term_id',
          'terms'    =>  $blog_category, // 12
          'include_children' => true
        )
        );
    endif;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array( 
    'post_type' => 'testimonial', 
    'posts_per_page' => 5, 
    'paged' => $paged, 
    'tax_query' => $tax_query,
  );
  $posts = new WP_Query($args); 
?>
  <ul class="m-articleGridBlock">
    <?php 
      while($posts->have_posts()) :
        $posts->the_post();
        $categories = get_the_category();    
        $meta_date = get_the_date('M d, Y');
    ?>
    <li>
      <div class="m-articleGridBlock__imageContainer">
      <?php 
        if(get_field('intro_image')): 
          echo get_acf_image_srcset( get_field('intro_image'), 'lazyload m-articleGridBlock__imageContainer'); 
        else :
          echo get_acf_image_srcset( get_field('news_intro_image', 'option'), 'lazyload m-articleGridBlock__imageContainer'); 
        endif;
      ?>
      </div>
      <div class="m-articleGridBlock__titleContainer">
        <h3 class="o-introContent__subtitle">
          <?php the_category(', '); ?>
        </h3>
        <a href="<?php the_permalink();?>">
        <h1 class="o-introContent__title">
          <?php the_title(); ?>
        </h1>
        </a>
        <div class="m-articleGridBlock__metadata">
          <?php get_svg('clock-light');?>
          <span><?php echo $meta_date; ?></span>
        </div>
      </div>
      <div class="m-articleGridBlock__contentContainer">
        <div class="m-articleGridBlock__content">
         <?php the_excerpt(); ?>
        </div>
      </div>
    </li>
    <?php 
      endwhile;
    ?>
  </ul>
</div>
  <?php 
    remove_filter( 'the_category', 'no_links' );
    // Bottom pagination (pagination arguments)
    echo "<div class='page-nav-container'>" . paginate_links(array(
      'total' => $posts->max_num_pages,
      'prev_text' => __('<'),
      'next_text' => __('>')
    )) . "</div>";

  
  ?>
