<?php // Footer Supplement Links 
/* 
  * check post acf for posts. If none, get last 2 recent posts.
  * see how many posts on page and let that determine how many recent posts are needed. 
  * Display in page posts first.
*/
  $post_type = get_post_type();
  $titles = array();
  $excerpts = array();
  $permalinks = array();
  $news_articles = (get_field('news_articles')) ? get_field('news_articles') : $titles;
  // if there are artiles in the post admin
  if($news_articles):
    foreach ($news_articles as $article) :
      setup_postdata($news_article);
      $news_article = $article['news_article'];
      array_push($titles, $news_article->post_title);
      array_push($permalinks, get_the_permalink($news_article->ID));
      if(has_excerpt($news_article->ID)) :
        $excerpt = get_the_excerpt($news_article->ID);
      else :
        $excerpt = wp_trim_words(get_field('intro_text', $news_article->ID), 30);
      endif;
      array_push($excerpts, $excerpt);
    endforeach;
  endif;
  //check to see if any recent blog posts need to be fetched
  $number_articles=sizeof($titles);
  if( $number_articles < 2) :
    $number_articles = 2 - $number_articles;
    //get tax type
    if($post_type == 'testimonial')
      $taxonomy = 'taxonomy_category';
    else
      $taxonomy = 'category';   

    if($post_type == 'testimonial'){
      $category = '142';
      $tax_query = array(
        array(
          'taxonomy' => $taxonomy,
          'field'    => 'term_id',
          'terms'    =>  $category,
        )
      );      
    }else
      $tax_query = '';

    $args = array( 
      'numberposts' => $number_articles, 
      'post_type' => $post_type,
      'tax_query' => $tax_query,
    );
    $news_article = wp_get_recent_posts( $args );
    foreach ($news_article as $article) :
      array_push($titles, $article['post_title']);
      array_push($permalinks, get_the_permalink($article['ID']));

      if(has_excerpt($article['ID'])) :
        $excerpt = get_the_excerpt($article['ID']);
      else :
        if($post_type == 'testimonial'):
          $acf = 'testimonial_content';
          $sub_title = 'Success Story';
        else:
          $acf = 'intro_text';
          $sub_title = get_field('footer_blog_subtitle', 'option');
        endif;
        $excerpt = wp_trim_words(get_field($acf, $article['ID']), 30);
      endif;
      array_push($excerpts, $excerpt);
    endforeach;
    wp_reset_query();
  endif;

?>
<div class="o-footerSupplementLinks">
  <?php
    for($i=0; $i<2; $i++) :
  ?>
  <div class="m-footerSupplementLinks">
    <img class="m-footerSupplementLinks__image" src="<?php echo get_acf_image(get_field('footer_blog_icon', 'option'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> " />

    <h3 class="m-footerSupplementLinks__subtitle">
      <?php echo $sub_title; ?>
    </h3>
    <h1 class="m-footerSupplementLinks__title">
      <?php echo $titles[$i]; ?>
    </h1>
    <div class="m-footerSupplementLinks__text">
      <?php echo $excerpts[$i]; ?>
    </div>
    <a class="a-roundLink o-SupplementLinks" href="<?php echo $permalinks[$i]; ?>"><?php the_field('footer_blog_link_title', 'option'); ?></a>
  </div>
  <?php
    endfor;

    if($post_type == "post") :
  ?>
  <a class="a-roundLink o-donateLinklink" href="/news-media">All Articles</a>
  <?php else: ?>
  <a class="a-roundLink o-donateLinklink" href="/success-stories/">All Success Stories</a>
  <?php endif; ?>
</div>