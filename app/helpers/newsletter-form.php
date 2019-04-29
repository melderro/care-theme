<?php
/**
 * Process the Newsletter form in the footer.
 * 1. collect information
 * 2. send admin notification
 * 3. send user notification
 * 4. add entry to gravity forms admin
 */

function process_news_letter_form(){
  var_dump ($_POST);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  if(filter_var($email, FILTER_VALIDATE_EMAIL)) :
    if(is_email($email)) :
      //create email messages
//       echo ("$email safe to send");
//       $admin_to = "saji@designfwd.com";
//       $subject = "Thank you for subscribing to our newsletter";
//       $admin_message = <<<ADMINEMAIL
//       <html>
//           <head>
//               <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
//           </head>
//           <body>
//             $email has joined the mailing list.

//           </body>
//         </html>
// ADMINEMAIL;

//       $user_message = <<<USEREMAIL
//       <html>
//           <head>
//               <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
//           </head>
//           <body>
//             Thank you for joining the mailing list.

//           </body>
//         </html>
// USEREMAIL;

      //add entry to gravity forms
      $form_id = 1;
      $entry = array(
          "form_id" => $form_id,
          "1" => $email,
      );
      
      $entry_id = GFAPI::add_entry($entry);
      $form = RGFormsModel::get_form_meta($form_id);
      $entry = RGFormsModel::get_lead($entry_id);
      $notification_ids = array();
      foreach ($form['notifications'] as $id => $info) {

          array_push($notification_ids, $id);

      }

      // Send the notifications
      // var_dump ($notification_ids);
      // var_dump($form);

      GFCommon::send_notifications($notification_ids, $form, $entry);
      die();
    endif;
  else :
    echo ("no good");
  endif;


  die();

}

add_filter('wp_mail_content_type', function ($content_type) {
    return 'text/html';
});
add_action('admin_post_nopriv_footer_newsletter_form', 'process_news_letter_form');
add_action('admin_post_footer_newsletter_form', 'process_news_letter_form');