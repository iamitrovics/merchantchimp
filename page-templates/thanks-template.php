<?php
/**
 * Template Name: Thanks Template
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

    <section id="regular-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="ermac__content">
                        <img src="<?php bloginfo('template_directory'); ?>/img/misc/sent.png" alt="" class="img-responsive">
                        <h5><?php the_field('content_block_thanks_page'); ?></h5>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-back"><i class="fal fa-long-arrow-left"></i> <?php the_field('button_label_ermac', 'options'); ?></a>

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
