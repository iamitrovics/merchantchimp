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
                <?php 
                $values = get_field( 'small_title_header_general' );
                if ( $values ) { ?>

                   <h3><?php the_field('small_title_header_general'); ?></h3>

                <?php 
                } else { ?>

                    <h3><?php the_title(''); ?></h3>

                <?php } ?>
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

    <section id="products-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="product__wrapper">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product__image">
                                    <img src="<?php the_field('product_main_image'); ?>'" alt="" class="img-responsive">
                                    <a href="<?php bloginfo('url'); ?>/products" class="btn-more">View All Products <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                                <!-- // image  -->
                            </div>
                            <!-- // col image -->
                            <div class="col-lg-6 offset-lg-1">
                                <div class="product__content">
                                    <h2><?php the_title(''); ?></h2>
                                    <div class="intro">
                                        <?php the_field('intro_content_side_product'); ?>
                                    </div>
                                    <!-- // intro  -->
                                    <div class="main__content">
                                        <?php the_field('main_content_product'); ?>
                                    </div>
                                    <!-- // content  -->

                                        <div id="accordion">

                                            <?php if( have_rows('features_list_repe') ): ?>
                                            <?php $counter = 0; ?>
                                            <?php while( have_rows('features_list_repe') ): the_row(); $counter++; ?>

                                            <div class="carder">
                                                <div class="card-head" id="headingOne">
                                                <h5 class="mb-0">
                                                    <h6><a  data-toggle="collapse" data-target="#collapse<?php echo $counter ; ?>" aria-expanded="true" aria-controls="collapse<?php echo $counter ; ?>">
                                                    <?php the_sub_field('title'); ?>
                                                    </a></h6>
                                                </h5>
                                                </div>

                                                <div id="collapse<?php echo $counter ; ?>" class="collapse <?=($counter == 1) ? 'show' : ''?>"" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-content">
                                                    <?php the_sub_field('content'); ?>
                                                </div>
                                                </div>
                                            </div>

                                                <?php endwhile; ?>
                                            <?php endif; ?>

                                    </div>
                                    <!-- // acc  -->

                                </div>
                            </div>
                            <!-- // content  -->                
                        </div>
                        <!-- // row  -->
                    </div>
                    <!-- // wrapper  -->
                </div>
                <!-- // md wrapper  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // prduct  -->

    <section id="product-additional__content">
        <div class="container">
            <?php if( have_rows('content_block') ): ?>
               <?php while( have_rows('content_block') ): the_row(); ?>
                   <div class="additional__wrapper">
                        <div class="content__image">
                            <img src="<?php the_sub_field('featured_image'); ?>" alt="" class="img-respo">
                        </div>
                        <!-- // image  -->
                        <div class="content">
                            <h5><?php the_sub_field('small_title'); ?></h5>
                            <h4><?php the_sub_field('main_title'); ?></h4>
                            <?php the_sub_field('content_block'); ?>
                        </div>
                        <!-- // contne  -->
                   </div>
                   <!-- // wrapper  -->
               <?php endwhile; ?>
            <?php endif; ?>
            <div class="additional__cta">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                        <?php the_field('icon_code_product_cta', 'options'); ?>
                        <h5><?php the_field('main_title_products_cta', 'options'); ?></h5>
                        <?php the_field('content_block_products_cta', 'options'); ?>
                    </div>
                </div>
            </div>
            <!-- // cta  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // additional content  -->

    <div id="product-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="content">
                        <img src="<?php the_field('featured_image_waraty_cta', 'options'); ?>" alt="" class="img-responsive">
                        <h4><?php the_field('main_title_waranty_cta', 'options'); ?></h4>
                        <?php the_field('content_block_waranty_cta', 'options'); ?>
                    </div>
                    <!-- // content  -->
                </div>
            </div>
        </div>
        <!-- // row  -->
    </div>
    <!-- // product cta  -->

    <div id="bottom-cta" class="bottom-cta__nopad">
        <div class="top-shape">
        <svg width="100%" height="100%" viewBox="0 0 1280 140" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><g fill="var(--top-divider-color, #eef3f9)"><path d="M1280 69.65l-320 49.24L320 20.4 0 69.65V0h1280v69.65z"></path></g></svg>
        </div>
        <!-- // shape  -->
        <div class="container">
            <img src="<?php the_field('featured_image_cards_bottom', 'options'); ?>" alt="" class="card-image">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <div class="cta__content">
                        <h4><?php the_field('main_title_bottom_cta', 'options'); ?></h4>
                        <p><?php the_field('content_block_bottom_cta', 'options'); ?></p>
                        <footer>
                            <?php if( get_field('button_1_label_bottom_cta', 'options') ): ?>
                                <a href="<?php the_field('button_1_link_bottom_cta', 'options'); ?>" class="btn-cta btn-quote"><?php the_field('button_1_label_bottom_cta', 'options'); ?></a>
                            <?php endif; ?>
                            <?php if( get_field('button_2_label_bottom_cta', 'options') ): ?>
                                <a href="<?php the_field('button_2_link_bottom_cta', 'options'); ?>" class="btn-cta btn-sec"><?php the_field('button_2_label_bottom_cta', 'options'); ?></a>
                            <?php endif; ?>
                        </footer>
                    </div>
                </div>
                <!-- // content  -->
            </div>
            <!-- // row  -->
        </div>
    </div>
    <!-- // bottom cta  -->

<?php get_footer(); ?>
