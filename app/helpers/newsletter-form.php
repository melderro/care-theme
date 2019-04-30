<?php
/**
 * Process the Newsletter form in the footer.
 * 1. collect information
 * 2. send admin notification
 * 3. send user notification
 * 4. add entry to gravity forms admin
 */

function process_news_letter_form(){
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  if(filter_var($email, FILTER_VALIDATE_EMAIL)) :
    if(is_email($email)) :
      //add entry to gravity forms, send out notifications and process confirmations
      $form_id = 1;
      $input_values['input_1'] = $email;
      $result = GFAPI::submit_form($form_id, $input_values);
    endif;
  else :
    echo ("no good");
  endif;
}

add_filter('wp_mail_content_type', function ($content_type) {
    return 'text/html';
});
add_action('admin_post_nopriv_footer_newsletter_form', 'process_news_letter_form');
add_action('admin_post_footer_newsletter_form', 'process_news_letter_form');