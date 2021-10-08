<?php
/**
 * Template Name: Quote Template
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

    <section id="quote-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="quote__content">

                        <?php the_field('form_code_quote'); ?>

                    </div>
                    <!-- // content  -->
                </div>
                <!-- // col lg  -->
            </div>
            <!-- // row  -->
        </div>
    </section>
    <!-- // regular page  -->

    <?php include(TEMPLATEPATH . '/inc/bottom-inc.php'); ?>

<?php get_footer(); ?>
