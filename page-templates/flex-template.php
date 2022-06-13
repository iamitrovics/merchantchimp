<?php
/**
 * Template Name: Flex Template
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
                    <h1><?php the_field('hero_title_flexi'); ?></h1>
                    <?php the_field('intro_text_flex_hero'); ?>
                    <a href="tel:<?php the_field('phone_number_cta_hero_flex'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_flex_hero'); ?></span></a>
                </div>
            </div>
                <div class="image-artwork">
                <div class="container container-new">
                    <img src="<?php the_field('featured_image_hero_flex'); ?>" alt="">
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
            </div>
        </div>
        <!-- /#booking-div-wrap -->
	</header>
    <!-- // header  -->

    <div class="flex-intro">
        <div class="container">
            <div class="flex-intro-inner">
                <?php the_field('intro__content_flex_intro'); ?>
            </div>
            <!-- // inner  -->
        </div>
    </div>
    <!-- // flex intro  -->

    <div id="quote-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php the_field('button_link_intro_flex'); ?>"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_intro_flex'); ?></span></a>                       
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.quote-area -->

    <div id="flex-main">

        <?php if( have_rows('flexible_content_flexi') ): ?>
            <?php while( have_rows('flexible_content_flexi') ): the_row(); ?>

                <?php if( get_row_layout() == 'content_left_image_right' ): ?>

                    <div class="content-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
                                    <div class="content-block pad-right">
                                        <?php the_sub_field('content_block_left'); ?>
                                    </div>
                                </div>
                                <!-- // content  -->
                                <div class="col-lg-5 col-md-6">
                                    <div class="image-holder">
                                        <?php
                                        $imageID = get_sub_field('featured_image_right');
                                        $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                    </div>
                                </div>
                                <!-- // image  -->
                            </div>
                        </div>
                        <!-- // contaner  -->
                    </div>
                    <!-- // wrapper  -->

                <?php elseif( get_row_layout() == 'image_left_con_right' ): ?>

                    <div class="content-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 image-col">
                                    <div class="image-holder">
                                        <?php
                                        $imageID = get_sub_field('featured_image_left');
                                        $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                    </div>
                                </div>
                                <!-- // image  -->                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-block pad-left">
                                        <?php the_sub_field('content_block_right'); ?>
                                    </div>
                                </div>
                                <!-- // content  -->
                            </div>
                        </div>
                        <!-- // contaner  -->
                    </div>
                    <!-- // wrapper  --> 
                    
                 <?php elseif( get_row_layout() == 'cta' ): ?>
                    
                    <div class="flex-cta">
                        <div class="container">
                            <div class="cta-wrapper">
                                <?php the_sub_field('cta_content'); ?>
                                <a class="btn-cta" href="<?php the_sub_field('button_link'); ?>">
                                    <span><i class="far fa-long-arrow-right"></i><?php the_sub_field('button_label'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- // cafe cta  -->  
                
                <?php elseif( get_row_layout() == 'benefits' ): ?>
                    
                    <div class="benefits-flex">
                        <div class="container">
                            <div class="intro-text">
                                <?php the_sub_field('intro_text_benefits'); ?>
                            </div>
                            <!-- // text  -->

                            <div class="row">
                                <?php if( have_rows('benefits_list') ): ?>
                                <?php while( have_rows('benefits_list') ): the_row(); ?>
                                    <div class="col-md-4">
                                        <div class="benefit-box">
                                        <h4><?php the_sub_field('icon_code'); ?> <?php the_sub_field('title'); ?></h4>
                                        <?php the_sub_field('content_block'); ?>
                                        </div>
                                        <!-- /.benefit-box -->
                                    </div>
                                    <!-- /.col-md-4 -->                   
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // benefits  -->

                <?php elseif( get_row_layout() == 'small_cta' ): ?>

                    <div class="quote-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="<?php the_sub_field('button_link'); ?>"><span><i class="far fa-long-arrow-right"></i><?php the_sub_field('button_label_small'); ?></span></a>                       
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.quote-area -->

                <?php elseif( get_row_layout() == 'features' ): ?>
            
                    <div class="benefits-flex">
                        <div class="container">
                            <div class="intro-text">
                                <?php the_sub_field('intro_text_features'); ?>
                            </div>
                            <!-- // text  -->

                            <div class="row">
                                <?php if( have_rows('features_list') ): ?>
                                <?php while( have_rows('features_list') ): the_row(); ?>
                                    <div class="col-md-3">
                                        <div class="feature-box">
                                            <div class="icon">
                                                <?php the_sub_field('icon_code'); ?> 
                                            </div>
                                            <?php the_sub_field('content__block'); ?>
                                        </div>
                                        <!-- /.benefit-box -->
                                    </div>
                                    <!-- /.col-md-4 -->                   
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // benefits  -->     
                    
                <?php elseif( get_row_layout() == 'packages' ): ?>

                    <div class="packages-wrapper">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-lg-5">
                                    <div class="intro-text">
                                        <?php the_sub_field('intro_text'); ?>
                                    </div>
                                </div>
                                <!-- // intro  -->

                                <div class="col-lg-7">
                                    <div class="packages-list">
                                        <div class="row">
                                            <?php if( have_rows('packages_list') ): ?>
                                                <?php while( have_rows('packages_list') ): the_row(); ?>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="package-card">
                                                            <span class="title"><?php the_sub_field('title'); ?></span>
                                                            <div class="package-text">
                                                                <?php the_sub_field('content_block'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- // card  -->

                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <!-- // row  -->
                                    </div>
                                </div>
                                <!-- // list   -->

                            </div>
                            <!-- // row  -->
                            <footer>
                                <?php the_sub_field('bottom_notice'); ?>
                                <a href="<?php the_sub_field('button_link'); ?>" class="see-all"><span><i class="far fa-long-arrow-right"></i><?php the_sub_field('button_label'); ?></span></a>
                            </footer>
                        </div>
                        <!-- // container   -->
                    </div>
                    <!-- // wrapper   -->

                <?php elseif( get_row_layout() == 'faq' ): ?>

                    <div class="faq-wrapper">
                        <div class="container">
                            <header>
                                <h2><?php the_sub_field('section_title_faq'); ?></h2>
                            </header>
                            <!-- // header  -->

                            <div class="faq__section">
                                <div class="accordion">
                                    <?php if( have_rows('faq_list') ): ?>
                                       <?php while( have_rows('faq_list') ): the_row(); ?>
                                           <h3><?php the_sub_field('quesiton'); ?></h3>
                                           <div class="answer">
                                               <?php the_sub_field('answer'); ?>
                                           </div>
                                       <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <!-- // accordion  -->
                           </div>
                           <!-- // section  -->

                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // faq wrappe  -->

                <?php elseif( get_row_layout() == 'centered_intro' ): ?>
                    
                    <div class="intro-flex">
                        <div class="container">
                            <div class="intro-text">
                                <?php the_sub_field('content_block_center_intro'); ?>
                            </div>
                            <!-- // text  -->
                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // benefits  -->

                <?php elseif( get_row_layout() == 'products' ): ?>

                    <div class="products-wrapper">
                        <div class="container">
                            <div class="products-list">
                                
                                <?php if( have_rows('products_list') ): ?>
                                    <?php while( have_rows('products_list') ): the_row(); ?>

                                        <div class="product-card">
                                            <div class="product-image">
                                                <img src="<?php the_sub_field('image'); ?>" alt="">
                                            </div>
                                            <!-- // image  -->
                                            <div class="product-content">
                                                <h3><?php the_sub_field('title'); ?></h3>
                                                <?php the_sub_field('content_block'); ?>
                                            </div>
                                            <!-- // content  -->
                                        </div>
                                        <!-- // card  -->

                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                            <!-- // list  -->
                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // wrapper  -->

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <!-- // main  -->


	<?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>

<script>
    $( function() {
        $( ".accordion" ).accordion({
            heightStyle: "content",
            active: false,
            collapsible: true,
        });
        } );
</script>
