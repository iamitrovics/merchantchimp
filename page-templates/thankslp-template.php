<?php
/**
 * Template Name: Thank You Landing Template
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
               <a href="<?php the_field('cta_link_header_marketring_thanks'); ?>"><?php the_field('main_title_thanks_landing_header'); ?></a>
            </div>
            <!-- /.topbar-text -->
         </div>
         <!-- /.lp-topbar -->
      </header>
      <!-- /#lp-header -->
      
      <div id="thankyou">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2><?php the_field('small_title_thanks_landing_market'); ?></h2>
                  <div class="thankyou-block">
                    <div class="ty-content">
                        <h1><?php the_field('main_title_thansk_marketing'); ?></h1>
                        <?php the_field('content_marketing_thanks'); ?>
                    </div>
                    <!-- /.ty-content -->
                     <div class="ty-images">
                        <img alt="" src="<?php the_field('image_left_marketing_thanks'); ?>" class="card-artwork">   
                        <img alt="" src="<?php the_field('image_right_thanks_marketing'); ?>" class="leaf-artwork"> 
                     </div>
                     <!-- /.ty-images -->
                  </div>
                  <!-- /.thankyou-block -->
                  <div class="when-block">
                     <h3><?php the_field('main_title_thanks_marketar'); ?></h3>
                     <div class="when-buttons">
                        <a href="tel:<?php the_field('phone_number_1_thans_marketing'); ?>"><?php the_field('button_1_label_thanks_marketing'); ?></a>
                        <a href="tel:<?php the_field('phone_number_2_thans_marketing'); ?>"><?php the_field('button_2_label_thanks_marketing_copy'); ?></a>                    
                     </div>
                     <!-- /.when-buttons -->
                  </div>
                  <!-- /.when-block -->
               </div>
            </div>
         </div>
      </div>
      <!-- /#thankyou -->

<?php get_footer('lp'); ?>
