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

    <header id="photo-header" class="services-header industry-header">

		<img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/shape1.png" class="l-headerbg"> 
		<img alt="" src="<?php the_field('featured_image_hero_ind'); ?>" class="r-headerbg">            

		<div class="caption">
			<div class="container">
				<h1><?php the_field('main_title_hero_ind'); ?></h1>
				<?php the_field('intro_text_hero_ind'); ?>
				<a href="tel:<?php the_field('phone_number_hero_ind'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_hero_ind'); ?></span></a>
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

	<section id="industries-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<header>
					<h2><?php the_field('main_title_intro_ind'); ?></h2>
					<?php the_field('intro_text_intro_ind_poage'); ?>
				</header>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-md-12">
				<div class="video-area">
                    <?php
                    $imageID = get_field('featured_image_intro_ind');
                    $image = wp_get_attachment_image_src( $imageID, 'blogfeat-image' );
                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                    ?> 

                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
				</div>
				<!-- /.video-area -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
		<div class="container container-new">
            <a href="tel:<?php the_field('button_link_into_ind_page'); ?>" class="quote"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_intro_ind_page'); ?></span></a>			
		</div>
		<!-- /.container container-new -->
	</section>
	<!-- /#video-block -->   
    
    <?php if( have_rows('content_layout_ind_page') ): ?>
        <?php while( have_rows('content_layout_ind_page') ): the_row(); ?>
            <?php if( get_row_layout() == 'content_blocks' ): ?>

                <div id="industries-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <?php if( have_rows('content_blocks_ind_page') ): ?>
                                    <?php while( have_rows('content_blocks_ind_page') ): the_row(); ?>
                                        <section class="content-block">
                                            <div class="text-content">
                                                <h3><?php the_sub_field('block_title'); ?></h3>
                                                <?php the_sub_field('content_block'); ?>
                                                <?php if( get_sub_field('button_label') ): ?>
                                                <a href="<?php the_sub_field('button_link'); ?>" class="btn-cta"><span><i class="far fa-long-arrow-right"></i> <?php the_sub_field('button_label'); ?></span></a>
                                                <?php endif; ?>
                                            </div>
                                            <!-- /.client-content -->
                                            <div class="content-image">
                                                <?php
                                                $imageID = get_sub_field('featured_image');
                                                $image = wp_get_attachment_image_src( $imageID, 'test-image' );
                                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                ?> 

                                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            </div>
                                            <!-- /.client-image -->
                                        </section>
                                        <!-- /.client-block -->                                   
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /#clients-area -->    

            <?php elseif( get_row_layout() == 'testimonials' ): ?>

                <section id="testimonials">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <header>
                                <span class="title"><?php the_field('small_title_test_general', 'options'); ?></span>
                                <h3><?php the_field('main_title_test_general', 'options'); ?></h3>
                                <?php the_field('intro_content_test_general', 'options'); ?>
                            </header>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                    <div class="testimonial-slider--block container">
                        <div class="row">
                            <div class="col-md-12">
                            <div id="testimonial-slider">

                                <?php
                                $post_objects = get_sub_field('list_of_testimonials');

                                if ($post_objects): ?>
                                    <?php foreach ($post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>
                                            
                                            <div>
                                                <div class="testimonial-box">
                                                    <blockquote>
                                                        <?php the_field('testimonials_content'); ?>
                                                    </blockquote>
                                                    <footer>
                                                        <span class="author"><?php the_title(''); ?></span>
                                                        <!-- /.author -->
                                                    </footer>
                                                    <div class="testimonial-icon">
                                                        <i class="fab fa-skyatlas"></i>
                                                    </div>
                                                    <!-- /.testimonial-icon -->
                                                </div>
                                                <!-- /.testimonial-box -->
                                            </div>

                                    <?php endforeach; ?>
                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                <?php endif; ?>

                            </div>
                            <!-- /#testimonial-slider -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.testimonial-slider--block container -->
                </section>
                <!-- /#testimonials -->   

            <?php elseif( get_row_layout() == 'why_mc' ): ?>

                <section id="benefits">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <header>
                                <span class="title"><?php the_sub_field('small_title'); ?></span>
                                <h3><?php the_sub_field('main_title'); ?></h3>
                                <h6><?php the_sub_field('intro_text'); ?></h6>
                                </header>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <?php if( have_rows('why_blocks') ): ?>
                            <?php while( have_rows('why_blocks') ): the_row(); ?>
                                    <div class="col-md-4">
                                        <div class="benefit-box">
                                        <h4><?php the_sub_field('ico_ncode'); ?> <?php the_sub_field('title'); ?></h4>
                                        <?php the_sub_field('text'); ?>
                                        </div>
                                        <!-- /.benefit-box -->
                                    </div>
                                    <!-- /.col-md-4 -->                   
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /#benefits -->    
                
            <?php elseif( get_row_layout() == 'left_right_images' ): ?>
                
                <div id="services-listing">
                    <div id="services-list-block">

                        <?php if( have_rows('content_blocks_repe') ): ?>
                            <?php while( have_rows('content_blocks_repe') ): the_row(); ?>
                            
                            <?php if (get_sub_field('layout_type') == 'Image Left') { ?>

                                    <section class="services-list-box">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="about-lshape">
                                        <div class="container">
                                                <div class="about-block--text">
                                                <h3><?php the_sub_field('main_title'); ?></h3>
                                                <?php the_sub_field('conten_block'); ?>

                                                </div>
                                                <!-- /.about-block--text -->
                                            <div class="about-block--image">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="mobile-shape">
                                            <img src="<?php the_sub_field('featured_image'); ?>" alt="">
                                            </div>
                                        </div>
                                    </section>
                                    <!-- /.services-list-box -->

                                    <?php } elseif (get_sub_field('layout_type') == 'Image Right') { ?>

                                    <section class="services-list-box">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/bg/benefit-rshape.png" alt="" class="about-lshape">
                                        <div class="container">
                                            <div class="about-block--text">
                                            <h3><?php the_sub_field('main_title'); ?></h3>
                                            <?php the_sub_field('conten_block'); ?>

                                            </div>
                                            <!-- /.about-block--text -->
                                            <div class="about-block--image">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/bg/benefit-rshape.png" alt="" class="mobile-shape">
                                            <img src="<?php the_sub_field('featured_image'); ?>" alt="">
                                            </div>
                                        </div>
                                    </section>
                                    <!-- /.services-list-box -->                    

                                <?php } ?>   

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <!-- /#services-list-block -->      
                </div>          

            <?php elseif( get_row_layout() == 'center_content' ): ?>

            <section id="industries-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                        <header>
                            <h2><?php the_sub_field('main_title_center'); ?></h2>
                            <?php the_sub_field('content_block_center'); ?>
                        </header>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /#video-block -->                   

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>    
	
	<?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>
