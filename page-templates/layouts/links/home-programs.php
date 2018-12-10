<?php // Home program paragraph content and links ?>
<div class="o-homePrograms">
  <div class="m-bodyContent__contentimage o-homeProgramsBlock">
    <img class="m-bodyContent__image" src="<?php echo get_acf_image( get_field('program_content_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="m-bodyContent__content o-homeProgramsBlock">
    <h3 class="m-bodyContent__subtitle">
      Program Sub Heading
    </h3>
    <h2 class="m-bodyContent__title">
      <?php the_field('program_content_title'); ?>
      Program Sub Title
    </h2>
    <div class="m-bodyContent__paragraph">
      <?php the_field('program_content_text'); ?>  
      Vivamus egestas vulputate euismod. Nam maximus rhoncus dui, a aliquam erat venenatis id. Nam lacinia dignissim justo ut facilisis. Donec dolor odio, elementum ac risus in, mollis molestie dui. Nunc aliquet tempus elit, sit amet porttitor tellus. Etiam suscipit sodales efficitur. Maecenas tempor tellus hendrerit nisl aliquam, eu varius velit cursus. Quisque at libero dolor.    
    </div>
  </div>  
</div>
