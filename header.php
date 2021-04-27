<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5KFZ747');</script>
<!-- End Google Tag Manager -->
	<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  ga('send', 'event', 'Contact Form', 'submit');
}, false );
</script>
<meta name="google-site-verification" content="LUZLJrj8lYiV8RH3Bak3qldLECf3i5zuxxqgadSdVRg" />
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KFZ747"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php do_action( 'wp_body_open' ); ?>

  <?php // All header content goes below this line ?>
  <header class="header">
    <div class="company-colours">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="container large-container">
      <div class="header-wrapper">
        <a class="logo" href="<?php echo get_site_url(); ?>" title="<?php echo get_bloginfo(); ?>">
          <img src="<?php echo the_field('large_logo', 'option'); ?>" alt="Bright Futures Logo" />
        </a>
        <a class="logo-small" href="<?php echo get_site_url(); ?>" title="<?php echo get_bloginfo(); ?>">
          <img src="<?php echo the_field('small_logo', 'option'); ?>" alt="Bright Futures Logo" />
        </a>
        <div class="header-left ml-auto">
          <a class="team" href="<?php echo get_site_url(); ?>/join-the-team" title="Join the Team">join the team</a>
          <a class="team" href="<?php echo get_site_url(); ?>/make-a-referral" title="Make a Referral">make a referral</a>
          <a class="speak" href="<?php the_field('speak_up', 'option'); ?>" title="Speak Up">
            <img src="<?php echo get_template_directory_uri(); ?>/images/speak-up.svg" alt="Speak Up Logo" />
          </a>
          <div class="font-size">
            <a id="font-small" href="javascript:smallFontSize();">A</a>
            <a id="font-normal" href="javascript:normalFontSize();">A</a>
            <a id="font-large" href="javascript:largeFontSize();">A</a>
          </div>
          <button id="navbar-toggle" class="navbar-toggler hamburger hamburger--squeeze" data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
    </div>
    <?php include get_theme_file_path( '/templates/includes/nav.php' ); ?>
  </header>

  <main id="main">
