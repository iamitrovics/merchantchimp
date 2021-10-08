<?php
/**
 * Template Name: Marketing Landing Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('lp');
$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="lp-header">
         <div class="lp-topbar">
            <div id="lp-logo">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logos/logo-white.png" alt=""></a>
            </div>
            <!-- /#lp-logo -->
            <div class="topbar-text">
               <a href="<?php the_field('cta_link_marketing'); ?>"><?php the_field('cta_title_marketing'); ?></a>
            </div>
            <!-- /.topbar-text -->
         </div>
         <!-- /.lp-topbar -->
      </header>
      <!-- /#lp-header -->
      
      <div id="lp-masheader">
         <img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/shape-left.png" class="l-headerbg-new"> 
         <img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/shape-right.png" class="r-headerbg-new"> 
         <img alt="" src="<?php the_field('image_left_hero_marketing'); ?>" class="card-artwork">   
         <img alt="" src="<?php the_field('image_right_hero_marketing'); ?>" class="leaf-artwork">             
         <div class="video-area">
            <?php the_field('video_code_marketing'); ?>
         </div>
         <!-- /.video-area -->
         <div id="booking-div-wrap">
            <header>
               <h2><?php the_field('form_title_marketing'); ?></h2>
            </header>

            <div class="container">

                <div id="booking-form--lp">

                        <div class="col-intro">
                            <h3>Get a Quote</h3>
                        </div>

                        <div class="col-form">
                           <?php the_field('header_form_code_marketing'); ?>
                        </div>
                        <!-- // cok  -->

                </div>
                <!-- /#booking-div -->
            </div>
            <!-- // container  -->

         </div>
            <!-- /#booking-div-wrap -->

      </div>
      <!-- /#lp-masheader -->

      <?php if( have_rows('content_blocks_marketing') ): ?>
         <?php while( have_rows('content_blocks_marketing') ): the_row(); ?>
            <?php if( get_row_layout() == 'content_blocks' ): ?>

               <div id="clients-area">
                  <div class="slogan">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <h6><?php the_sub_field('main_title'); ?></h6>
                           </div>
                           <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /.container -->
                  </div>
                  <!-- /.slogan -->
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <?php if( have_rows('content_blocks') ): ?>
                              <?php while( have_rows('content_blocks') ): the_row(); ?>
                                 <section class="client-block">
                                    <div class="client-content">
                                       <h3><?php the_sub_field('title'); ?></h3>
                                       <?php the_sub_field('content'); ?>
                                    </div>
                                    <!-- /.client-content -->
                                    <div class="client-image">
                                       <?php
                                       $imageID = get_sub_field('featured_image');
                                       $image = wp_get_attachment_image_src( $imageID, 'marketing-image' );
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

            <?php elseif( get_row_layout() == 'main_cta' ): ?>

                  <div class="slogan cta-slogan">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <h6><?php the_sub_field('cta_title'); ?></h6>
                           </div>
                           <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /.container -->
                  </div>
                  <!-- /.slogan -->

            <?php elseif( get_row_layout() == 'process' ): ?>

               <section id="process">

                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <header>
                              <span class="title"><?php the_sub_field('small_title'); ?></span>
                              <h3><?php the_sub_field('main_title'); ?></h3>
                              <?php the_sub_field('content'); ?>
                           </header>
                        </div>
                        <!-- /.col-md-12 -->
                     </div>
                     <!-- /.row -->
                     <div class="row">
                        <?php if( have_rows('process_list') ): ?>
                           <?php $i=1; ?>
                           <?php while( have_rows('process_list') ): the_row(); ?>
                           <div class="col-md-6 col-lg-3">
                              <div class="process-box">
                                 <div class="proces-ico-wrap">
                                    <div class="num"><span><?php echo $i; ?></span></div>
                                    <div class="process-ico">
                                       <?php the_sub_field('icon'); ?>
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

            <?php endif; ?>
         <?php endwhile; ?>
      <?php endif; ?>      





      <section id="booking-block-wrap" class="lp-bookinga-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <header>
                     <h3><?php the_field('main_title_footer_cta_marketing'); ?></h3>
                  </header>
               </div>
               <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->

            <div id="booking-div-wrap">
               <div class="container">

                  <div id="booking-form--lp">

                           <div class="col-intro">
                              <h3>Get a Quote</h3>
                           </div>

                           <div class="col-form">
                              <?php the_field('footer_form_code_marketing'); ?>

                           </div>
                           <!-- // cok  -->

                  </div>
                  <!-- /#booking-div -->
               </div>
               <!-- // container  -->

            </div>
               <!-- /#booking-div-wrap -->            

         </div>
         <!-- /.container -->
      </section>
      <!-- /#booking-block-wrap -->

<?php get_footer('lp'); ?>
