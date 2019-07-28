<?php
/**
 * @package Apostrophe
 *
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="/wp-content/themes/apostrophe-2-child/fonts/brandongrotesque_black_macroman/stylesheet.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="/wp-content/themes/apostrophe-2-child/fonts/brandongrotesque_regular_macroman/stylesheet.css" type="text/css" charset="utf-8" />
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <script src="/wp-content/themes/apostrophe-2-child/js/wow.js"></script>
    <script>
      new WOW().init();
    </script>
    <script type="text/javascript">
      jQuery(function(jQuery) {
        jQuery(".lpg-contact-button").hover(function() {
          jQuery(".lpg-contact-panel-wrapper").show();
        });
        jQuery(".lpg-close-contact-button").click(function() {
          jQuery(".lpg-contact-panel-wrapper").hide();
        });
        jQuery(".lpg-begin-button").hover(function() {
          jQuery(".lpg-begin-panel-wrapper").show();
        });
        jQuery(".lpg-close-begin-button").click(function() {
          jQuery(".lpg-begin-panel-wrapper").hide();
        });
      });
      
    </script>
  </head>
  
  <?php 
    // determine current page
    global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request));
    $current_path = str_replace("http://lpgdemo.marceliotstein.net/","",$current_url);
    $current_path = str_replace("http://lpgdemo.marceliotstein.net","",$current_path);

    $current_page = "HOME";
    if ($current_path=="about-lpg") { 
      $current_page = "ABOUT";
    } else if ($current_path=="our-team") { 
      $current_page = "TEAM";
    }
  ?>

  <body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
      <header id="masthead" class="site-header" role="banner">
	<div class="site-branding">
          <div class="lpg-empire-panel">
            <div class="burger">
              <div class="lpg-logo">
                <a href="/"><img class="lpg-logo-img" alt="LPG Logo" src="/wp-content/themes/apostrophe-2-child/images/lpg-logo-trim.png" /></a>
              </div>
	       <nav id="site-navigation" class="main-navigation" role="navigation">
		 <a class="menu-toggle"><?php esc_html_e( '', 'apostrophe-2' ); ?></a>
		 <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'apostrophe-2' ); ?></a>
		 <?php wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_class'     => 'apostrophe-2-navigation',
		       )); 
                 ?>
	 	 <?php //apostrophe_2_social_menu(); ?>
	       </nav>
            </div>
            <?php if ($current_page=="ABOUT") { ?>
              <div class="lpg-practicetitles">
                <div class="lpg-title lpg-our-practice">
                  OUR PRACTICE
                </div>
                <div class="lpg-teal-panel" data-wow-offset="10">
                  <img src="/wp-content/themes/apostrophe-2-child/images/lpg-ribbon.png" />
                  <p class="lpg-our-practice-text">A divorce is an extremely emotional<br /> and personal process.<br>Whether you are a public figure or not,<br />service and confidentiality are<br />at the core of our representation.</p>
                  <div class="lpg-contact-button-box">
                    <button class="lpg-contact-button">
                    CONTACT US
                    </button>
                    <div class="lpg-vertical-line-placeholder">
                    </div>  
                  </div>  
                </div>  
              </div>  
            <?php } else if ($current_page=="TEAM") { ?>
              <div class="lpg-teamtitles">
                <div class="lpg-title lpg-our-team">
                  OUR TEAM
                </div>
                <div class="lpg-teal-panel" data-wow-offset="10">
                  <img src="/wp-content/themes/apostrophe-2-child/images/lpg-ribbon.png" />
                  <p class="lpg-our-team-text">At LPG, we take each case individually.<br />We work on your behalf with full transparency.
                  <ul><li>We listen attentively to get the facts of your case&mdash;to spot the legal issues and explain the Laws of the State of New York as they relate to you.</li>
                   <li>We explain how much the process will cost: legal fees, expert fees (if necessary) and other "add-ons" some lawyers forget to mention.</li>
                   <li>We anticipate what the realistic outcomes might be in the case.</li>
                   <li>We proudly work in an ethical and legal manner at all times and keep you informed of who's working on your legal matter.</li></ul>
                  </p>
                </div>  
              </div>  
            <?php } else { ?>
              <div class="lpg-maintitles">
                <div class="lpg-title lpg-home-title">
                  THE LAW FIRM <span class="lpg-title-of">of</span><br />LAURENCE P. GREENBERG
                </div>
 
                <hr class="lpg-bar" />
                <div class="lpg-narrowview">
                  <div class="lpg-personally">
                    WE TAKE YOUR CASE PERSONALLY
                  </div>
                  <div class="lpg-adept">
                    The Law Firm of Laurence P. Greenberg is adept in every aspect of matrimonial law &mdash;no matter how complex with victories at both the trial and appellate levels.
                  </div>  
                </div>  
                <div class="lpg-wideview">
                  <div class="lpg-spacer"></div>
                </div>
                <div class="lpg-contact-button-box">
                  <button class="lpg-contact-button">
                    CONTACT US
                  </button>
                  <div class="lpg-vertical-line">
                  </div>  
                </div>  
              </div>  
            <?php } ?>
          </div>
          <div class="lpg-contact-panel-wrapper" style="display:none">
            <div class="lpg-contact-panel">
              <div class="lpg-contact">
                Contact Us
                <button class="lpg-close-contact-button">
                  X
                </button>
              </div>
              <div class="lpg-contact-box">
                <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]'); ?>
              </div>
            </div>
          </div>
          <?php if ($current_page=="HOME") { ?>
            <div class="lpg-wideview">
              <div class="lpg-personally">
                WE TAKE YOUR CASE PERSONALLY
              </div>
              <div class="lpg-adept">
                The Law Firm of Laurence P. Greenberg is adept in every aspect of matrimonial law &mdash;no matter how complex with victories at both the trial and appellate levels.
              </div>  
            </div>  
          <?php } ?>
        </div>

      </header><!-- #masthead -->

      <div id="content" class="site-content">
