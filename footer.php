<?php
/**
 * @package Apostrophe
 *
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>	
  
<?php 
  // determine current page
  global $wp;
  $current_url = home_url(add_query_arg(array(), $wp->request));
  $current_path = str_replace("http://lpgdemo.marceliotstein.net/","",$current_url);
  $current_path = str_replace("http://lpgdemo.marceliotstein.net","",$current_path);

  // photo credit based on page

  $photo_credit = " Images by Unsplash.com.";
  if ($current_path=="our-practice") { 
    $photo_credit = " Portrait photos by Michael Meyer.";
  } 

  if ($current_path=="") { ?>
    <div class="lpg-begin-button-box">
      <button class="lpg-begin-button">LET'S BEGIN</button>
    </div>
    <div class="lpg-begin-panel-wrapper" style="display:none">
      <div class="lpg-begin-panel">
        <div class="lpg-begin">
          Let's Begin
          <button class="lpg-close-begin-button">X</button>
        </div>
        <div class="lpg-begin-box">
          <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
<?php } else { ?>
    <button class="lpg-buttonfix"></button>
<?php } ?>
  </div><!-- #content -->
  <div class="lpg-footer">
    <div class="lpg-footer-panel">
      <div class="lpg-wideview">
        <table class="lpg-widefooter-table">
          <tr>
            <td class="lpg-widefooter-td-left">
              <div class="lpg-footer-logo">
                <img class="lpg-footer-logo-img" alt="LPG Logo" src="/wp-content/themes/apostrophe-2-child/images/lpg-logo-trim.png" />
              </div>
              <div class="lpg-footer-address">
                The Law Firm of Laurence P. Greenberg<br />
                299 Broadway, New York, NY 10007
              </div>
            </td>
            <td class="lpg-widefooter-td-right">
              <div class="lpg-footer-table-wrapper">
                <table class="lpg-footer-table">
                  <tr class="lpg-footer-tr">
                    <td class="lpg-footer-td-left">
                      <img alt="mail" class="lpg-footer-icon" src="/wp-content/themes/apostrophe-2-child/images/icons-mail.png" />
                    </td>
                    <td class="lpg-footer-td-right">
                      <a href="mailto:info@lpgdivorce.com">info@lpgdivorce.com</a>
                    </td>
                  </tr>
                  <tr class="lpg-footer-tr">
                    <td class="lpg-footer-td-left">
                      <img alt="phone" class="lpg-footer-icon" src="/wp-content/themes/apostrophe-2-child/images/icons-phone.png" />
                    </td>
                    <td class="lpg-footer-td-right">
                       (212) 608 9000
                    </td>
                  </tr>
                  <tr class="lpg-footer-tr">
                    <td class="lpg-footer-td-left">
                      <img alt="fax" class="lpg-footer-icon" src="/wp-content/themes/apostrophe-2-child/images/icons-fax.png" />
                    </td>
                    <td class="lpg-footer-td-right">
                      (212) 732 6972
                      </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="lpg-narrowview">
        <div class="lpg-footer-logo">
          <a href="/"><img class="lpg-footer-logo-img" alt="LPG Logo" src="/wp-content/themes/apostrophe-2-child/images/lpg-logo-trim.png" /></a>
        </div>
        <div class="lpg-footer-address">
          The Law Firm of Laurence P. Greenberg<br />
          299 Broadway, New York, NY 10007
        </div>
        <table class="lpg-footer-table">
          <tr class="lpg-footer-tr">
            <td class="lpg-footer-td-left">
              <img alt="mail" class="lpg-footer-icon" src="/wp-content/themes/apostrophe-2-child/images/icons-mail.png" />
            </td>
            <td class="lpg-footer-td-right">
              <a href="mailto:info@lpgdivorce.com">info@lpgdivorce.com</a>
            </td>
          </tr>
          <tr class="lpg-footer-tr">
            <td class="lpg-footer-td-left">
              <img alt="phone" class="lpg-footer-icon" src="/wp-content/themes/apostrophe-2-child/images/icons-phone.png" />
            </td>
            <td class="lpg-footer-td-right">
               (212) 608 9000
            </td>
          </tr>
          <tr class="lpg-footer-tr">
            <td class="lpg-footer-td-left">
              <img alt="fax" class="lpg-footer-icon" src="/wp-content/themes/apostrophe-2-child/images/icons-fax.png" />
            </td>
            <td class="lpg-footer-td-right">
              (212) 732 6972
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="lpg-footer-copyright">
      &copy; <?php echo date("Y"); ?> All Rights Reserved. <?php echo $photo_credit ?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
