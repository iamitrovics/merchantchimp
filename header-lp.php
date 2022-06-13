<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png">
    <?php wp_head(); ?>
        
	<?php the_field('fb_pixel_code_marketing_thanks'); ?>

	<meta name="google-site-verification" content="rWpE_ZFClOTCVKWkuWzKw27zZWlCSTxlCaQrdQLLdZg" />
	<meta name="ahrefs-site-verification" content="b6d355d34cf2473a151d4e7ec88ef43d1605fe1652e09c0e20b9c0f07a7e0e27">
	<meta name="facebook-domain-verification" content="s5qomh0642u2e45kibdz8bjyel1wrf" />
		<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PLTX5LC');</script>
	<!-- End Google Tag Manager -->	
	
</head>

<body <?php body_class(); ?>>


	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLTX5LC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<script type="application/ld+json">
	{
	"@context": "https://schema.org",
	"@type": "ProfessionalService",
	"name": "Merchant Chimp",
	"image": "https://merchantchimp.com/wp-content/uploads/2020/02/logo.png",
	"@id": "",
	"url": "https://merchantchimp.com/w",
	"telephone": "888-9559-888",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "18580 Ventura Blvd D,",
		"addressLocality": "Tarzana",
		"addressRegion": "CA",
		"postalCode": "91356",
		"addressCountry": "US"
	},
	"openingHoursSpecification": {
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": [
		"Monday",
		"Tuesday",
		"Wednesday",
		"Thursday",
		"Friday",
		"Saturday",
		"Sunday"
		],
		"opens": "07:30",
		"closes": "19:00"
	} 
	}
	</script>