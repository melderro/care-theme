<?php // Program Related Topics content ?>
<div class="o-programRelatedTopics">  
<h2>Related Topics Heading</h2>
  <ul class="m-programRelatedTopics__list">
    <?php
      if(get_field('program_related_topics_page_link')) :
        $page_links = get_field('program_related_topics_page_link');
        foreach($page_links as $page_link) :
          $permalink = get_the_permalink($page_link->ID);

          if($category = wp_get_post_categories($page_link->ID)) :
            $category = get_category($category);
          endif;
    ?>
      <li>
        <a href="<?php echo $permalink;?>">
          <span class="m-programRelatedTopics__Category"><?php echo $category->name;?></span>
          <?php echo $page_link->post_title; ?>
        </a>
      </li>
      <?php 
        endforeach;
      else:
      ?>
      <li>
        <a>There are currently no related topics.</a>
      </li>
      <?php endif; ?>
  </ul>
</div>
