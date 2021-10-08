<?php
/**
 * Template Name: Industries Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<header id="photo-header">
   <img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/shape1.png" class="l-headerbg"> 
   <img alt="" src="<?php bloginfo('template_directory'); ?>/img/headers/industries.png" class="r-headerbg">                
   <div class="caption">
      <div class="container">
         <h1><?php the_field('custon_title_ind_header'); ?></h1>
         <?php the_field('intro_content_ind_header'); ?>
         <a href="tel:<?php the_field('button_link_ind_header'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_ind_header'); ?></span></a>
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
<div id="industries-listing">
   <section id="video-block">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <header>
                  <h2><?php the_field('main_title_video_ind'); ?></h2>
                  <?php the_field('content_block_video_ind'); ?>
               </header>
            </div>
            <!-- /.col-md-12 -->
         </div>
         <!-- /.row -->
         <div class="row">
            <div class="col-md-12">
               <div class="video-area">
                  <?php the_field('video_code_video_ind'); ?>
               </div>
               <!-- /.video-area -->
            </div>
            <!-- /.col-md-12 -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
      <div class="container container-new">
          <a href="tel:<?php the_field('button_link_video_ind'); ?>" class="quote"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_ind_video'); ?></span></a>
      </div>
      <!-- /.container container-new -->
   </section>
   <!-- /#video-block -->
   <section id="industries-list">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <header>
                  <span class="title">Supporting Businesses </span>
                  <h3>The List of Industries We Cover </h3>
                  <h6>Assisting businesses to reach their true potential by decreasing monthly operating costs and enabling true next-day funding.</h6>
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
         <!-- // row  -->
      </div>
      <!-- /.container -->
   </section>
   <!-- /#industries-list -->
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
                    $post_objects = get_field('testimonials_list_ind');

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
   <section id="benefits-more">
      <section class="benefits-more--content">
         <img src="<?php bloginfo('template_directory'); ?>/img/bg/benefit-rshape.png" alt="" class="benefit-rshape">
         <div class="container">
            <div class="benefit-block--text">
               <span class="title"><?php the_field('small_title_benefits_ind'); ?></span>
               <h3><?php the_field('main_title_benefits_ind'); ?></h3>
               <?php the_field('content_block_benefits_ind'); ?>
               <a href="tel:<?php the_field('button_link_benefits_ind'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_benefits_ind'); ?></span></a>
            </div>
            <!-- /.benefit-block--text -->
            <div class="benefit-block--image">
               <img src="<?php the_field('featured_image_benefits_ind'); ?>" alt="">
               <img src="<?php bloginfo('template_directory'); ?>/img/bg/benefit-rshape.png" alt="" class="mobile-shape">
            </div>
            <!-- /.benefit-block--image -->
         </div>
      </section>
      <!-- /.benefit-block--content -->
   </section>
   <!-- /#benefits-more -->



      <section class="about-block--content">
         <div class="container">
            <img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="about-lshape">
            <div class="about-block--text">
               <span class="title"><?php the_field('small_title_perk_ind'); ?></span>
               <h3><?php the_field('main_title_perk_ind'); ?></h3>
               <?php the_field('content_block_perk_ind'); ?>
               <a href="<?php the_field('button_link_perk_ind'); ?>" class="see-all"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_perk_ind'); ?></span></a>
            </div>
            <!-- /.about-block--text -->
            <div class="about-block--image">
               <img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="mobile-shape">
               <img src="<?php the_field('featured_image_perk_ind'); ?>" alt="">
            </div>
         </div>
      </section>
      <!-- /.about-block--content -->
	
	<?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>
