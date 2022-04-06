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

	<?php if( get_field('head_snipet_code', 'options') ): ?>
		<?php the_field('head_snipet_code', 'options'); ?>
	<?php endif; ?>

    <?php wp_head(); ?>
        
    
</head>

<body <?php body_class(); ?>>

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