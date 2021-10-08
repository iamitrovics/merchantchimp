<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="masheader">
        <img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/shape1.png" class="l-headerbg"> 
        <img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/headerbg.png" class="r-headerbg">                
        <div class="caption">
            <div class="container">
                <h1><?php the_field('intro_content_sidebar_cities'); ?></h1>
                <?php the_field('intro_text_city_single'); ?>
                <a href="tel:<?php the_field('phone_number_cities_single'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('phone_number_cities_single'); ?></span></a>
                <div class="image-artwork-mob image-city--mob">
                    <?php
                    $imageID = get_field('featured_image_city_single');
                    $image = wp_get_attachment_image_src( $imageID, 'city-image' );
                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                    ?> 

                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                </div>
                <!-- // mobile image  -->                
            </div>
        </div>
        <div class="image-artwork">
            <div class="container container-new city-image">
                    <?php
                    $imageID = get_field('featured_image_city_single');
                    $image = wp_get_attachment_image_src( $imageID, 'city-image' );
                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                    ?> 

                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
            </div>
        </div>
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

    <section id="city__single">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="city__content">

                            <?php
                            // check if the flexible content field has rows of data
                            if( have_rows('type_of_layout_cities') ):
                                // loop through the rows of data
                                while ( have_rows('type_of_layout_cities') ) : the_row(); ?>
                                <?php if( get_row_layout() == 'full_width_content' ): ?>
                                        <div class="regular__full">
                                            <?php the_sub_field('content_block'); ?>
                                        </div>
                                        <!-- // full  -->

                                <?php elseif( get_row_layout() == 'download' ):  ?>
                                
                                <?php endif;
                                endwhile;
                            else :
                            endif;

                            ?>

                    </div>
                    <!-- // content city  -->
                </div>
            </div>
            <!-- // row  -->
        </div>
    </section>
    <!-- // city single  -->

	
    <?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>
