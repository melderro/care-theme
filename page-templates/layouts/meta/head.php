<?php
/**
 * Metatags and other links for the <head> area of the page
 *
 * Includes basic meta markup as well as Google site certification, tag manager, and TypeKit before calling
 * the wp_head() function;
 */
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php // Typekit integration
    if( get_field('typekit_id', 'option') ):
      $typekit_id = get_field('typekit_id', 'option');
  ?>
    <script>
      (function(d) {
        var config = {
          kitId: '<?php echo $typekit_id; ?>',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
  <?php
    endif;
  ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MB58JC8');</script>
<!-- End Google Tag Manager -->
  <?php // WordPress head() function
  
    wp_head();

    /**
 * Redirect rule for Internet Explorer
 */
// Only runs if the page is not the compatibility page
if( !is_page( array('ie', 'IE Compatibility Landing Page') ) ):
  ?>
    <script type="text/javascript">
    if(navigator.appName.indexOf("Internet Explorer")!=-1 || navigator.userAgent.match(/Trident.*rv[ :]*11\./))
    {
      //This user uses Internet Explorer
      window.location = "https://careofsem.com/ie/";
    }
    </script>
<?php endif; ?>
</head>
