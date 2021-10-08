<?php
/**
 * Template Name: Regular Template
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
				<h1><?php the_field('custom_title_regular_header'); ?></h1>
				<?php the_field('intro_content_regualr_header'); ?>
				<a href="tel:<?php the_field('button_link_regular_header'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_labe_regular_header'); ?></span></a>
			</div>
		</div>
			<div class="image-artwork">
			<div class="container container-new">
				<img src="<?php the_field('featured_image_header_about'); ?>" alt="">
			</div>
		</div>
		<!-- // caption  -->
        <div id="booking-div-wrap">
            <div class="container">
                <div id="booking-div">
                    <div class="book-wrapper">

                        <div class="col-intro">
                            <h3>Get a Quote</h3>
                        </div>

                        <div class="col-form">

                            <?php echo do_shortcode('[gravityform id="2"  title="false" description="false" ajax="true"]'); ?>

                        </div>
                        <!-- // cok  -->

                    </div>
                    <!-- // row  -->
                </div>
                <!-- /#booking-div -->
            </div>
        </div>
        <!-- /#booking-div-wrap -->
    </header>
    
    <section id="regular__content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <?php the_field('regular_content_page'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // regular conten  -->

	
	<?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>
