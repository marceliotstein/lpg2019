<?php
	/**
 * @package Apostrophe
 *
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>	
    <div class="lpg-begin-panel" style="display:none">
      <div class="lpg-begin">
        Let's Begin
        <button class="lpg-close-begin-button">X</button>
      </div>
      <div class="lpg-begin-box">
        <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div><!-- #content -->
<?php wp_footer(); ?>
<div class="lpg-footer-panel">
  <img class="lpg-footer-img" src="/wp-content/themes/apostrophe-2-child/images/lpg-footer.png" />
  <div class="lpg-footer-copyright">
    &copy; 2019 All Rights Reserved
  </div>
</div>
</body>
</html>
