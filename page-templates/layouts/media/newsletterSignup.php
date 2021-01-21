<?php // Footer Newsletter Signup ?>
<div class="o-footerNewsletterSignup">
  <h2 class="m-footerNewsletterSignup__title">get our latest news</h2>
  <div class="m-footerNewsletterSignup__content">
  Sign up for the latest news and updates from CARE.
  </div>
  <div class="o-footerSignup__button gf_button_get_form_1">
  <?php 
  // The form
  //gravity_form( $form, false, false, false );
  echo do_shortcode('[gravityforms action="button" id="1" text="SUBSCRIBE" ajax=false]');
  ?>
  </div>
</div>