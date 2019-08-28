<?php // Main Category Case Study content
$universal_testimonial = get_field('testimonial', 'option');
?>
<div class="o-maincategoryCaseStudy">
  <div class="m-bodyContent__content m-maincategoryCaseStudy__content">
    <h2 class="m-bodyContent__title m-maincategoryCaseStudy__title">
      <?php echo $universal_testimonial->post_title; ?>
    </h2>
    <div class="m-bodyContent__paragraph m-maincategoryCaseStudy__paragraph">
      <?php echo get_field('testimonial_content', $universal_testimonial->ID) ?>
    </div>
    <div class="o-introContent__link m-maincategoryCaseStudy__link">
      <a class="a-roundLink o-maincategoryCaseStudylink" href="<?php echo get_the_permalink($universal_testimonial->ID); ?>">
      <span>Read More</span>
      </a>  
    </div>
  </div>
  <div class="m-bodyContent__contentimage m-maincategoryCaseStudy__contentimage ">

  <?php echo get_acf_image_srcset( get_field('testimonial_image', $universal_testimonial->ID), 'lazyload m-bodyContent__image m-maincategoryCaseStudy__image'); ?>
  </div>
</div>
