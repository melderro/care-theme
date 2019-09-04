<?php // News Categories Filter ?>
<div class="o-articleGrid">
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged );
  $posts = new WP_Query($args); 
  add_filter( 'the_category', 'no_links' );
  while($posts->have_posts()) :
    $posts->the_post();
    $categories = get_the_category();
?>
  <ul class="m-articleGridBlock">
    <li><a href="<?php the_permalink();?>">
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
          <?php the_category(", "); ?>
        </h3>
        <h1 class="o-introContent__title">
          <?php the_title(); ?>
        </h1>  
      </div>
      <div class="m-articleGridBlock__contentContainer">
        <div class="m-articleGridBlock__content">
         <?php the_excerpt(); ?>
        </div>
      </div>
    </li></a>
  </ul>
</div>
  <?php 
    endwhile;
    remove_filter( 'the_category', 'no_links' );
    // Bottom pagination (pagination arguments)
    echo "<div class='page-nav-container'>" . paginate_links(array(
      'total' => $posts->max_num_pages,
      'prev_text' => __('<'),
      'next_text' => __('>')
    )) . "</div>";

  
  ?>
