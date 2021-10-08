<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

	<header id="artwork-header">
	<img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/shape1.png" class="l-headerbg"> 
	<img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/headerbg.png" class="r-headerbg">                  
		<div class="caption">

			<div class="container">
				<div class="image-artwork-mob">
					<img src="<?php the_field('featured_image_mobile_about_header'); ?>" alt="">
				</div>
				<h1><?php the_field('custom_title_ermac', 'options'); ?></h1>
				<h6><?php the_field('subtitle_ermac', 'options'); ?></h6>
				<?php the_field('content_block_ermac', 'options'); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="book"><span><i class="fal fa-long-arrow-left"></i> <?php the_field('button_label_ermac_header', 'options'); ?></span></a>
			</div>
		</div>
			<div class="image-artwork">
			<div class="container container-new">
				<img src="<?php the_field('featured_image_header_about'); ?>" alt="">
			</div>
		</div>
		<!-- // caption  -->
	</header>
	
	<div class="ermac__space"></div>

<?php get_footer(); ?>
