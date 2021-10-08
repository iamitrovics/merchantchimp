<?php
/**
 * Template Name: About Template
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
				<h1><?php the_field('main_title_about_header'); ?></h1>
				<?php the_field('content_block_about_header'); ?>
				<a href="tel:<?php the_field('phone_number_about_header'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_about_header'); ?></span></a>
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
		</div>
	</div>
	<!-- /#booking-div-wrap -->
	</header>
	<div id="industries-listing" class="about-inner">

	<section id="video-block">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<header>
					<span class="title"><?php the_field('small_title_how_about'); ?></span>
					<h2><?php the_field('main_title_who_about'); ?></h2>
					<?php the_field('content_block_who_about'); ?>
				</header>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-md-12">
				<div class="video-area">
					<?php the_field('video_code_about_page'); ?>
				</div>
				<!-- /.video-area -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
		<div class="container container-new">
			<?php if (get_field('button_type_about_page') == 'Modal Form') { ?>
				<a href="#" class="quote"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_about_page'); ?></span></a>
			<?php } elseif (get_field('button_type_about_page') == 'Inner Page') { ?>
				<a href="<?php the_field('link_to_page_about_page_cta'); ?>" class="quote"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_about_page'); ?></span></a>
			<?php } elseif (get_field('button_type_about_page') == 'Phone') { ?>
				<a href="tel:<?php the_field('phone_number_about_page_cta'); ?>" class="quote"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_about_page'); ?></span></a>
			<?php } ?>  			
		</div>
		<!-- /.container container-new -->
	</section>
	<!-- /#video-block -->

	<section class="about-block--content">
		<div class="container">
			<img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="about-lshape">
			<div class="about-block--text">
				<span class="title"><?php the_field('small_title_services_about_page'); ?></span>
				<h3><?php the_field('main_title_services_about_page'); ?></h3>
				<?php the_field('content_block_services_about_page'); ?>
				<a href="<?php the_field('button_link_services_about_page'); ?>" class="see-all"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_services_about_page'); ?></span></a>
			</div>
			<!-- /.about-block--text -->
			<div class="about-block--image">
				<img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="mobile-shape">
				<img src="<?php the_field('featured_image_services_about_page'); ?>" alt="">
			</div>
		</div>
	</section>
	<!-- /.about-block--content -->

	<section id="benefits-more">
		<section class="benefits-more--content">
			<img src="<?php bloginfo('template_directory'); ?>/img/bg/benefit-rshape.png" alt="" class="benefit-rshape">
			<div class="container">
				<div class="benefit-block--text">
				<span class="title"><?php the_field('small_title_know_about_page'); ?> </span>
				<h3><?php the_field('main_title_know_about_page'); ?></h3>
				<?php the_field('content_block_know_about_page'); ?>
				<a href="tel:<?php the_field('phone_number_about_page_cta'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> Book a Call</span></a>
				</div>
				<!-- /.benefit-block--text -->
				<div class="benefit-block--image">
				<img src="<?php the_field('featured_image_know_about_page'); ?>" alt="">
				<img src="<?php bloginfo('template_directory'); ?>/img/bg/benefit-rshape.png" alt="" class="mobile-shape">
				</div>
				<!-- /.benefit-block--image -->
			</div>
		</section>
		<!-- /.benefit-block--content -->
	</section>
	<!-- /#benefits-more -->


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
                    $post_objects = get_field('testimonials_list_about_page');

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

    <section id="process">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <header>
                  <span class="title"><?php the_field('small_title_process', 'options'); ?></span>
                  <h3><?php the_field('main_title_process', 'options'); ?></h3>
                  <?php the_field('content_block_process', 'options'); ?>
               </header>
            </div>
            <!-- /.col-md-12 -->
         </div>
         <!-- /.row -->
         <div class="row">
            <?php if( have_rows('process_list_repe', 'options') ): ?>
               <?php $i=1; ?>
               <?php while( have_rows('process_list_repe', 'options') ): the_row(); ?>
                  <div class="col-md-6 col-lg-3">
                     <div class="process-box">
                        <div class="proces-ico-wrap">
                           <div class="num"><span><?php echo $i; ?></span></div>
                           <div class="process-ico">
                              <?php the_sub_field('icon_code'); ?>
                           </div>
                           <!-- /.process-ico --> 
                        </div>
                        <!-- /.proces-ico-wrap -->
                        <h4><?php the_sub_field('title'); ?></h4>
                        <?php the_sub_field('text'); ?>
                     </div>
                     <!-- /.process-box -->
                  </div>
                  <!-- /.col-md-6 col-lg-3 -->                   
               <?php $i++; endwhile; ?>
            <?php endif; ?>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </section>
   <!-- /#process -->

	<section id="industries-list">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<header>
					<!--<span class="title">Supporting Businesses </span>-->
					<h3><?php the_field('main_title_about_industry'); ?></h3>
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
	
	<?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>
