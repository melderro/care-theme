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

// Hook up the AJAX ajctions
add_action('wp_ajax_nopriv_gf_button_get_form', 'gf_button_ajax_get_form');
add_action('wp_ajax_gf_button_get_form', 'gf_button_ajax_get_form');
// Add the "button" action to the gravityforms shortcode
// e.g. [gravityforms action="button" id=1 text="button text"]
add_filter('gform_shortcode_button', 'gf_button_shortcode', 10, 3);
function gf_button_shortcode($shortcode_string, $attributes, $content)
{
    $a = shortcode_atts(array(
        'id' => 0,
        'text' => 'Show me the form!',
        'button_class' => '',
    ), $attributes);
    $form_id = absint($a['id']);
    if ($form_id < 1) {
        return 'Missing the ID attribute.';
    }
    // Enqueue the scripts and styles
    gravity_form_enqueue_scripts($form_id, true);
    $ajax_url = admin_url('admin-ajax.php');
    $html = sprintf('<button id="gf_button_get_form_%d" class="%s">%s</button>', $form_id, $a['button_class'], $a['text']);
    $html .= sprintf('<div id="gf_button_form_container_%d" style="display:none;"></div>', $form_id);
    $html .= "<script>
    document.addEventListener('DOMContentLoaded', function(){ 
        (function (SHFormLoader, $) {
        $('.gf_button_get_form_1').click(function(){
          if(!$(this).hasClass('open')) {
            var button = $('#gf_button_get_form_1');
            $.get('{$ajax_url}?action=gf_button_get_form&form_id={$form_id}',function(response){
              button.parent().addClass('open');
              $('#gf_button_form_container_{$form_id}').html(response).fadeIn();
              button.remove();
              $('.m-footerNewsletterSignup__content').hide();
              if(window['gformInitDatepicker']) {gformInitDatepicker();}
            });
          }
        });
      }(window.SHFormLoader = window.SHFormLoader || {}, jQuery));
      });
      </script>";
    return $html;
}
function gf_button_ajax_get_form()
{
    $form_id = isset($_GET['form_id']) ? absint($_GET['form_id']) : 0;
    gravity_form($form_id, false, false, false, false, true);
    die();
}

function form_tag( $form_tag, $form ) {
  if($form['id'] != 1 ){ // change 1 to match your form id
    //not the form whose tag you want to change, return the unchanged tag
    return $form_tag;
  }
  // Turn off autocompletion as described here https://developer.mozilla.org/en-US/docs/Web/Security/Securing_your_site/Turning_off_form_autocompletion
  $form_tag = preg_replace( "|id='(.*?)'|", "id='footer-newsletterform'", $form_tag );
  return $form_tag;
}