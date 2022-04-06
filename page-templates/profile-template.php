<?php
/**
 * Template Name: Profile Template
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
				<h1><?php the_field('hero_title_profile_header'); ?></h1>
				<?php the_field('intro_text_hero_profile'); ?>
				<a href="tel:<?php the_field('phone_number_rpfile_header'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('phone_label_profile_header'); ?></span></a>
			</div>
		</div>
			<div class="image-artwork">
			<div class="container container-new">
				<img src="<?php the_field('featured_image_hero_profile'); ?>" alt="">
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

    <section id="about-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-block--intro">
                    <header>
                        <h2><?php the_field('section_title_profile_page'); ?></h2>
                    </header>
                    </div>
                    <!-- /.about-block--intro -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

    <div class="about-content-wrap">
        <section class="about-block--content">
            <div class="container">
                <img src="https://merchantchimp.com/wp-content/uploads/2020/03/shape2.png" alt="" class="about-rshape">
                <div class="about-block--text">
                    <h3><?php the_field('block_title_profile_about'); ?></h3>
                    <?php the_field('content_block_profile_ing'); ?>

                    <a href="tel:<?php the_field('phone_number_rpfo'); ?>" class="book "><span><i class="fas fa-phone-alt"></i> <?php the_field('phone_label_profile_about'); ?></span></a>

                    <a href="mailto:<?php the_field('email_address_profile'); ?>" class="book "><span><i class="fas fa-envelope-open-text"></i> <?php the_field('email_label_profile'); ?></span></a>

                    <?php if( get_field('linkedin_url_profile') ): ?>
                    <a target="_blank" href="<?php the_field('linkedin_url_profile'); ?>" class="book "><span><i class="fab fa-linkedin-in"></i> <?php the_field('linkedin_label_profile'); ?></span></a>
                    <?php endif; ?>

                    

                </div>
                <!-- /.about-block--text -->
                <div class="about-block--image">
                    <img src="https://merchantchimp.com/wp-content/uploads/2020/03/shape2.png" alt="" class="mobile-shape">
                    <img src="<?php the_field('featured_image_prof_about'); ?>" class="profile-image" alt="">
                </div>
                <!-- /.about-block--image -->
            </div>
        </section>
        <!-- /.about-block--content -->
    </div>

    </section>    
 

    <div id="industries-listing" class="about-inner">

    <section id="services">
        <div class="container">

            <div class="row row-center">
                <?php if( have_rows('features_list_profile') ): ?>
                   <?php while( have_rows('features_list_profile') ): the_row(); ?>
                    <div class="col-md-2">
                        <div class="services-box">
                        <?php the_sub_field('icon_code'); ?>
                        <h4><?php the_sub_field('title'); ?></h4>
                        </div>
                        <!-- /.services-box -->
                    </div>
                    <!-- /.col-md-4 -->                       
                   <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#services -->    
  

	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<header>
                    <span class="title"><?php the_field('small_title_test_profile'); ?></span>
                    <h3><?php the_field('section_title_test_prof'); ?></h3>
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
                    $post_objects = get_field('reviews_list_prof');

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
	
	<section id="industries-list">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<header>
					<!--<span class="title">Supporting Businesses </span>-->
					<h3>Industries We Serve</h3>
					<!--<h6>Assisting businesses to reach their true potential by decreasing monthly operating costs and enabling true next-day funding.</h6>-->
				</header>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
			<div class="row">

			<?php
			$loop = new WP_Query( array( 'post_type' => 'industry', 'posts_per_page' => 15) ); ?>  
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="col-lg-4 col-md-6">
				<div class="industries-box">
					<h4><?php the_title(''); ?></h4>
					<div class="industries-image">
						<div class="overlay"></div>
							<?php
							$imageID = get_field('featured_image_cover_industry');
							$image = wp_get_attachment_image_src( $imageID, 'ind-image' );
							$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
							?> 

							<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
						<a href="<?php echo get_permalink(); ?>"><span>Learn More</span></a>
					</div>
					<!-- /.industries-image -->
				</div>
				<!-- /.industries-box -->
				</div>
				<!-- /.col-lg-4 col-md-6 -->

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>      

			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- /#industries-list -->    

    </div>
	
	<?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>
