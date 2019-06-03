<?php
/**
 * Apostrophe functions and definitions
 *
 * @package Apostrophe
 */

function apostrophe_2_child_fonts_url() {
  $fonts_url = '';

  /* Translators: If there are characters in your language that are not
  * supported by PT Serif, translate this to 'off'. Do not translate
  * into your own language.
  */
  $pt_serif = _x( 'on', 'PT Serif font: on or off', 'apostrophe' );

  /* Translators: If there are characters in your language that are not
  * supported by Open Sans, translate this to 'off'. Do not translate
  * into your own language.
  */
  $open_sans = _x( 'on', 'Open Sans font: on or off', 'apostrophe' );

  if ( 'off' !== $pt_serif || 'off' !== $open_sans ) :
          $font_families = array();

          if ( 'off' !== $pt_serif ) {
                  $font_families[] = 'PT Serif:400,400italic,700,700italic';
          }

          if ( 'off' !== $open_sans ) {
                  $font_families[] = 'Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic';
          }

          // fonts for lpgdivorce.com
          $font_families[] = 'Archivo';
          $font_families[] = 'Josefin+Sans:300,400,600,700';

          $query_args = array(
                  'family' => urlencode( implode( '|', $font_families ) ),
                  'subset' => urlencode( 'latin,latin-ext,cyrillic' ),
          );

          $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

  endif;
  return $fonts_url;
}

function apostrophe_2_enqueue_styles() {
  $parent_style = 'apostrophe-2-style';
  wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array($parent_style),
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'apostrophe_2_enqueue_styles');

/* 
 * Implement custom header for child theme 
 *
 * NOTE: this line must REPLACE the corresponding line in the base theme functions.php.
 * If upgrading to a new base theme, edit functions.php to comment out the corresponding line.
 * 
 */
//require get_template_directory() . '-child/inc/custom-header.php';

