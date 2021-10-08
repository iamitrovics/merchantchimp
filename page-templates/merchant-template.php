<?php
/**
 * Template Name: Merchant Template
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
                <?php if( get_field('small_title_header_general') ): ?>
                    <h3><?php the_field('small_title_header_general'); ?></h3>
                <?php endif; ?>
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

    <section id="why__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <div class="why__list">

                        <?php if( have_rows('why_us_list_merch') ): ?>
                            <?php while( have_rows('why_us_list_merch') ): the_row(); ?>

                                <div class="why__card">
                                    <div class="why__icon">
                                        <?php the_sub_field('icon_code'); ?>
                                    </div>
                                    <!-- // icon  -->
                                    <div class="why__content">
                                        <h4><?php the_sub_field('main_title'); ?></h4>
                                        <p><?php the_sub_field('content'); ?></p>
                                    </div>
                                    <!-- // content  -->
                                </div>
                                <!-- // card  -->

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <!-- // list  -->

                </div>
                <!-- // col  -->
            </div>
            <!-- // row  -->

        </div>
    </section>
    <!-- // why wrapper  -->

    <?php include(TEMPLATEPATH . '/inc/bottom-inc.php'); ?>

<?php get_footer(); ?>
