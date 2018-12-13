<?php // Body paragraph content ?>
<div class="o-bodyContent">
  <div class="m-bodyContent__contentimage">
    <img class="m-bodyContent__image" src="<?php echo get_acf_image( get_field('program_content_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
  </div>
  <div class="m-bodyContent__content">
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
  <div class="m-bodyContent__contentcallout">
    <div class="m-bodyContent__callouttext">
    Nullam quis consectetur erat. Praesent vestibulum arcu ac dictum rutrum. Vestibulum dictum diam a ipsum tincidunt condimentum. Praesent pharetra nisl ante, ac convallis dolor auctor non.
    </div>
    <div class="m-bodyContent__calloutauthor">
      <img class="m-bodyContent__calloutimage" src="<?php echo get_acf_image( get_field('program_content_image'), '540w', 'http://via.placeholder.com/588x216?text=logo'); ?> "/>
      <span class="m-bodyContent__calloutname">
      Callout Name,</span>
      <span class="m-bodyContent__calloutsource">
      Callout Source
      </span>
    </div>
  </div>  
</div>
