<?php
	/**
 * @package Apostrophe
 *
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>	
    <div class="lpg-begin-button-box">
      <button class="lpg-begin-button">LET'S BEGIN</button>
    </div>
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
  <div class="lpg-footer-table-wrapper">
    <table class="lpg-footer-table">
      <tr class="lpg-footer-tr">
        <td class="lpg-footer-td">
          <img alt="mail" class="lpg-footer-icon" src="/wp-content/themes/apostrophe-2-child/images/icons-mail.png" />
        </td>
        <td class="lpg-footer-td">
          <a href="mailto:info@lpgdivorce.com">info@lpgdivorce.com</a>
        </td>
      </tr>
      <tr class="lpg-footer-tr">
        <td class="lpg-footer-td">
          <img alt="phone" class="lpg-footer-icon" src="/wp-content/themes/apostrophe-2-child/images/icons-phone.png" />
        </td>
        <td class="lpg-footer-td">
           (212) 608 9000
        </td>
      </tr>
      <tr class="lpg-footer-tr">
        <td class="lpg-footer-td">
          <img alt="fax" class="lpg-footer-icon" src="/wp-content/themes/apostrophe-2-child/images/icons-fax.png" />
        </td>
        <td class="lpg-footer-td">
          (212) 732 6972
        </td>
      </tr>
    </table>
  </div>
  <!--
  <div class="lpg-footer-copyright">
    &copy; 2019 All Rights Reserved
  </div>
  -->
</div>
</body>
</html>
