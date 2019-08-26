<?php // News Categories Filter ?>
<div class="o-articleFilter">

  <div class="m-articleFilterBlock">
    <h3 class="m-articleFilterBlock__title">
        Type
    </h3>
    <div class="m-articleFilterBlock__dropdown">
      <select>
       <option value="Press">Select</option>
      <?php
        $categories = get_categories('category');
        foreach($categories as $category) :
      ?>
       <option value="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name;?></option>
       <?php endforeach; ?>
      </select>
    </div>
  </div>

    <div class="m-articleFilterBlock">
    <h3 class="m-articleFilterBlock__title">
        Date
    </h3>
    <div class="m-articleFilterBlock__dropdown">
      <select>
      <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
      <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
      </select>
    </div>
  </div>

    <div class="m-articleFilterBlock">
    <h3 class="m-articleFilterBlock__title">
        Search
    </h3>
    <div class="m-articleFilterBlock__dropdown">
      <select>
       <option value="News">News</option>
       <option value="Press">Press</option>
       <option value="Peer Recovery">Peer Recovery</option>
      </select>
    </div>
  </div>

</div>
