<?php
/**
 * Template Name: Products Template
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
            <img src="<?php bloginfo('template_directory'); ?>/img/misc/header-image2-mob.png" alt="">
         </div>
         <h1><?php the_field('custom_title_products_header'); ?></h1>
         <?php the_field('intro_content_products_header'); ?>
         <a href="tel:<?php the_field('button_link_products_header'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_products_header'); ?></span></a>
      </div>
   </div>
     <div class="image-artwork">
      <div class="container container-new">
         <img src="<?php bloginfo('template_directory'); ?>/img/misc/header-image2.png" alt="">
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
<div id="products-listing">
   <section id="products-listing--intro">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <header>
                  <span class="title"><?php the_field('small_title_terminal_shop'); ?></span>
                  <h2><?php the_field('main_title_terminal_shop'); ?></h2>
                  <?php the_field('content_block_terminal_shop'); ?>
               </header>
            </div>
            <!-- /.col-md-12 -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </section>
   <!-- /#products-listing--intro -->

   <div class="products-list-block">
      <div class="container">
         <div class="row">

            <?php
            $loop = new WP_Query( array( 'post_type' => 'products', 'posts_per_page' => 35) ); ?>  
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

               <div class="col-md-6">
                  <div class="product-block">
                     <div class="row">
                        <div class="col">
                           <div class="product-image">
                              <img src="<?php the_field('cover_image_product'); ?>" alt="">
                           </div>
                           <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col">
                           <div class="product-text">
                              <h3><?php the_title(''); ?></h3>
                              <p><?php the_field('short_description_product_prodo'); ?></p>
                           </div>
                           <!-- /.product-text -->
                        </div>
                        <!-- /.col -->
                     </div>
                     <!-- /.row -->
                     
                  </div>
                  <!-- /.product-block -->
               </div>
               <!-- /.col-md-6 -->

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>      

         </div>
         <!-- /.row -->
         <div class="row">
            <div class="col-md-12">
               <div class="book-area">
                  <a href="tel:<?php the_field('cta_button_link_terminal_shop'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('cta_button_label_terminal_shop'); ?></span></a>
               </div>
               <!-- /.book-area -->
            </div>
            <!-- /.col-md-12 -->
         </div>
         <!-- /.row -->
      </div>
   </div>
   <!-- /.products-list-block -->

   <div id="services-list-block">
       <section class="services-list-box">
         <img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="about-lshape">
         <div class="container">
            <div class="about-block--text">
                <span class="title"><?php the_field('small_title_pos_benefits_page'); ?></span>
               <h3><?php the_field('main_title_pos_benefits_page'); ?></h3>
               <?php the_field('content_block_pos_benefits_page'); ?>
            </div>
            <!-- /.about-block--text -->
            <div class="about-block--image">
               <img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="mobile-shape">
               <img src="<?php the_field('featured_image_pos_benefits'); ?>" alt="">
            </div>
         </div>
      </section>
      <!-- /.services-list-box -->

      <section class="services-list-box">
         <img src="<?php bloginfo('template_directory'); ?>/img/bg/benefit-rshape.png" alt="" class="about-lshape">
         <div class="container">
            <div class="about-block--text">
               <span class="title"><?php the_field('small_title_consultation_page'); ?></span>
               <h3><?php the_field('main_title_consultation_page'); ?></h3>
               <?php the_field('content_block_consultation_page'); ?>
            </div>
            <!-- /.about-block--text -->
            <div class="about-block--image">
               <img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="mobile-shape">
               <img src="<?php the_field('featured_image_consultation_page'); ?>" alt="">
            </div>
         </div>
      </section>
      <!-- /.services-list-box -->
  </div>
  <!-- /#services-list-block -->

   <section id="benefits">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <header>
                  <span class="title"><?php the_field('small_title_persk_products_page'); ?></span>
                  <h3><?php the_field('main_title_perks_products_page'); ?></h3>
               </header>
            </div>
            <!-- /.col-md-12 -->
         </div>
         <!-- /.row -->
         <div class="row">
            <?php if( have_rows('perks_list_products_page') ): ?>
               <?php while( have_rows('perks_list_products_page') ): the_row(); ?>
                  <div class="col-md-4">
                     <div class="benefit-box">
                        <h4><?php the_sub_field('icon_code'); ?> <?php the_sub_field('title'); ?></h4>
                        <?php the_sub_field('content'); ?>
                        <!-- <a href="#"></a> -->
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


   <div class="quote-area">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <a href="<?php the_field('cta_button_link_perks_products'); ?>"><span><i class="far fa-long-arrow-right"></i><?php the_field('cta_button_label_perks_products'); ?></span></a>
            </div>
            <!-- /.col-md-12 -->
         </div>
         <!-- /.row -->
      </div>
   </div>




   <section class="products-list-block-additional">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <header>
                  <span class="title"><?php the_field('small_title_acess_products'); ?></span>
                  <h3><?php the_field('main_title_access_products'); ?></h3>
                  <?php the_field('content_block_access_products'); ?>
               </header>
            </div>
            <!-- /.col-md-12 -->
         </div>
         <!-- /.row -->
         <div class="row justify-content-center">

            <?php
            $loop = new WP_Query( array( 'post_type' => 'accessories', 'posts_per_page' => 35) ); ?>  
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

               <div class="col-lg-3 col-md-4">
                  <div class="product-block">
                     <div class="product-image"><img src="<?php the_field('cover_image_product'); ?>" alt=""></div>
                     <!-- /.product-image -->
                     <div class="product-text">
                        <h4><?php the_title(''); ?></h4>
                     </div>
                     <!-- /.product-text -->
                  </div>
                  <!-- /.product-block -->
               </div>
               <!-- /.col-lg-3 col-md-4 -->

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>      

         </div>
         <!-- /.row -->

         <div class="row">
            <div class="col-md-12">
               <div class="book-area">
                  <a href="tel:<?php the_field('button_link_access_products'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('cta_button_label_access_products'); ?></span></a>
               </div>
               <!-- /.book-area -->
            </div>
            <!-- /.col-md-12 -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </section>
   <!-- /.products-list-block-additional  -->

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

	<?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>
