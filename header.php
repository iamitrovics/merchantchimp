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
	
	<?php if( get_field('head_snipet_code', 'options') ): ?>
		<?php the_field('head_snipet_code', 'options'); ?>
	<?php endif; ?>

    <?php wp_head(); ?>
        
    
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

	<?php if( get_field('body_snippet_code', 'options') ): ?>
		<?php the_field('body_snippet_code', 'options'); ?>
	<?php endif; ?>

	<div class="main-menu-sidebar visible-xs visible-sm visible-md" id="menu">
	<header>
		<img src="<?php the_field('mobile_logo_general', 'options'); ?>" alt="" class="img-responsive">
		<a href="javascript:;" class="close-menu-btn"><i class="fal fa-times"></i></a>
	</header>
	<!-- // header  -->
	<nav id="sidebar-menu-wrapper">
		<div id="menu">
			<ul class="nav-links">
				<?php
				$primaryMenu = array(
					'theme_location'  => 'primary',
					'menu'            => '',
					'container'       => '',
					'container_class' => false,
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => 'primary-menu',
					'echo'            => false,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'depth'           => 0,
					'walker'          => ''
				);
				echo strip_tags( wp_nav_menu( $primaryMenu ), '<li><a>' );
				?>
			</ul>
			<footer><a href="<?php the_field('button_link_cta_mobile_menu', 'options'); ?>"><?php the_field('button_label_mobile_cta' , 'options'); ?></a></footer>
		</div>
		<!-- // menu  -->
	</nav>
	<!-- // sidebar menu wrapper  -->
	</div>


	<div class="menu-overlay"></div>

	<!-- <div id="cor-notice">
		<p>Important Corona Update   - <a href="<?php bloginfo('url'); ?>/important-corona-virus-update">Read More Here</a></p>
	</div>	 -->

	<div id="top-area">
		<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<nav class="navbar navbar-expand-lg navbar-classic">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php the_field('website_logo_general', 'options'); ?>" alt="<?php bloginfo('blogname'); ?>">
				</a>
				<div class="collapse navbar-collapse" id="navbar-classic">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">

					<?php wp_nav_menu( array(  'container_class' => false, 'container'       => '' , 'menu_class' => 'menu-links', 'theme_location' => 'primary', 'items_wrap' => '%3$s'  ) ); ?>
					
					</ul>
				</div>
			</nav>
			<div id="top__phone" class="d-lg-none">
				<a href="#"><i class="fas fa-phone-alt"></i></a>
			</div>
			<div id="top__mobile" class="d-lg-none">
				<a href="javascript:;" class="menu-btn">
				<span></span>
				<span></span>
				<span class="last-span"></span>
				</a>
			</div>
			</div>
		</div>
	</div>
	</div>
	<!-- /#top-area -->