<?php // Footer Newsletter Signup ?>
<div class="o-footerNewsletterSignup">
  <h2 class="m-footerNewsletterSignup__title">get our latest news</h2>
  <form method="post" enctype="multipart/form-data" id="footer-newsletterform" action="<?php echo esc_url(admin_url('admin-post.php'));?>">
  <input type="hidden" name="action" value="footer_newsletter_form">
  <input type="text" id="email" name="email" placeholder="Email Address">
  <input type="submit" value="Submit">
  </form>
</div>