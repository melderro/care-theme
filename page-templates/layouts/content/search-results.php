<?php // News Categories Filter ?>
<div class="o-articleGrid">
  <ul class="m-articleGridBlock">
    <?php 
  echo "Search found ".$wp_query->found_posts." results";

      while(have_posts()) : the_post();
        //$posts->the_post();
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
    the_posts_pagination( array(
      'mid_size' => 2,
      'prev_text' => __( 'Previous', 'textdomain' ),
      'next_text' => __( 'Next', 'textdomain' ),
  ) ); ?>