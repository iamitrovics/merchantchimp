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

    <header id="header-inner">
        <div class="container">
            <div class="header__caption">
                <div class="icon">
                    <?php the_field('font_awesome_code_services'); ?>
                </div>
                <!-- // icon  -->
                <?php 
                $values = get_field( 'main_title_header_general' );
                if ( $values ) { ?>

                   <h1><?php the_field('main_title_header_general'); ?></h1>

                <?php 
                } else { ?>

                    <h1><?php the_title(''); ?></h1>

                <?php } ?>
            </div>
            <!-- // caption  -->
        </div>
        <!-- // container  -->
    </header>
    <!-- // header inner  -->

    <section id="services-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services__wrapper">
                        <div class="row">
                            <div class="col-lg-4">
                                <aside class="services__sidebar">
                                    <h5>Services</h5>
                                    <h4><?php the_field('sidebar_title_services'); ?></h4>
                                    <?php the_field('services_content_sidebar'); ?>
                                    <a href="<?php bloginfo('url'); ?>/services" class="btn-more">View All Services</a>
                                </aside>
                            </div>
                            <!-- // sidebar  -->
                            <div class="col-lg-8">
                                <div class="service__content">

                                    <?php

                                    // check if the flexible content field has rows of data
                                    if( have_rows('type_of_layout_services_content') ):

                                        // loop through the rows of data
                                        while ( have_rows('type_of_layout_services_content') ) : the_row(); ?>

                                        <?php if( get_row_layout() == 'full_width_content' ): ?>

                                                <div class="regular__full">
                                                    <?php the_sub_field('content_block'); ?>
                                                </div>
                                                <!-- // full  -->

                                        <?php elseif( get_row_layout() == 'download' ):  ?>

                                            

                                        <?php endif;

                                        endwhile;

                                    else :

                                        // no layouts found

                                    endif;

                                    ?>

                                </div>
                            </div>
                            <!-- // service content  -->
                        </div>
                        <!-- // row  -->
                    </div>
                    <!-- // wrapper  -->
                </div>
                <!-- // col wrapper  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // services single  -->

    <section id="other-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <header>
                        <h4><?php the_field('small_title_ther_services', 'options'); ?></h4>
                        <h2><?php the_field('main_title_other_services'); ?></h2>
                    </header>
                </div>
                <!-- // col  -->
            </div>
            <!-- // orw  -->
            <div id="services-slider">
                <?php
                $loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => 35 , 'post__not_in' => array( $post->ID )) ); ?>  
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="item">
                        <div class="service__slide">
                            <div class="service__icon">
                                <?php if (get_field('icon_type_services') == 'Font Icon') { ?>
                                    <?php the_field('font_awesome_code_services'); ?>
                                <?php } elseif (get_field('icon_type_services') == 'Image') { ?>
                                    <img src="<?php the_field('image_icon'); ?>" alt="">
                                <?php } ?>     
                            </div>
                            <!-- // icon  -->
                            <div class="service__content">
                                <h5><?php the_title(''); ?></h5>
                                <p><?php the_field('short_description_service'); ?></p>
                                <a href="<?php echo get_permalink(); ?>" class="btn-more">Learn More <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <!-- // content  -->
                        </div>
                    </div>
                    <!-- // service slide  -->

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?> 
            </div>
            <!-- // services slider  -->
        </div>
        <!-- // container  -->
    </section>

    <?php include(TEMPLATEPATH . '/inc/bottom-inc.php'); ?>

<?php get_footer(); ?>
