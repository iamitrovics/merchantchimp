<?php
/**
 * Template Name: Thanks Signup Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('lp');
$container = get_theme_mod( 'understrap_container_type' );
?>

	<div id="top-bar--sign">
		<div class="container">
			<div class="top-bar--branding">
				<img src="<?php the_field('website_logo_general', 'options'); ?>" alt="<?php bloginfo('blogname'); ?>">
			</div>
			<!-- // branding  -->
			<div class="top-bar--cta">
				<a href="tel:<?php the_field('phone_number_top_cta_sign'); ?>" class="book"><span><i class="fas fa-phone-alt"></i>  Book a Call</span></a>
			</div>
			<!-- // cta  -->
		</div>
		<!-- // container  -->
	</div>
	<!-- // top bar sign  -->

    <header id="artwork-header">
	<img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/shape1.png" class="l-headerbg"> 
	<img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/headerbg.png" class="r-headerbg">                  
		<div class="caption">

			<div class="container">
				<div class="image-artwork-mob">
					<img src="<?php the_field('mobile_image_tnx_sign'); ?>" alt="">
				</div>
				<h2><?php the_field('thanks_label_hp'); ?></h2>
				<h1><?php the_field('block_title_hero_sign_tnx'); ?></h1>
				<?php the_field('content_block_mob_sign'); ?>
				<a href="<?php the_field('button_lnik_sign_btn'); ?>" class="book-back">
				<span><i class="far fa-long-arrow-right"></i> 
				<?php the_field('button_label_tnx_sign'); ?></span></a>
			</div>
		</div>
			<div class="image-artwork">
			<div class="container container-new">
				<img src="<?php the_field('featured_image_lp_tnx'); ?>" alt="">
			</div>
		</div>
		<!-- // caption  -->
		</div>
	</div>
	<!-- /#booking-div-wrap -->
	</header>

    <?php include(TEMPLATEPATH . '/inc/bottom-inc.php'); ?>

<?php get_footer(); ?>

<script>
	// Sticky header
	jQuery(window).scroll(function() {
	if ($(this).scrollTop() > 60){  
		$('#top-bar--sign').addClass("sticky-bar");
	}
	else{
		$('#top-bar--sign').removeClass("sticky-bar");
	}
});
</script>