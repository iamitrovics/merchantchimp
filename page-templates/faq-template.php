<?php
/**
 * Template Name: FAQ Template
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
         <h1><?php the_field('custom_title_faq_header'); ?></h1>
         <?php the_field('intro_content_faq_header'); ?>
         <a href="tel:<?php the_field('button_link_faq_header'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_faq_header'); ?></span></a>
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

    <div id="faq__listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <?php if( have_rows('faq_list_page') ): ?>
                       <?php while( have_rows('faq_list_page') ): the_row(); ?>
                           <div class="faq__section">
                                <h2><?php the_sub_field('main_title'); ?></h2>
                                <div class="accordion">
                                    <?php if( have_rows('faq_list_inner') ): ?>
                                       <?php while( have_rows('faq_list_inner') ): the_row(); ?>
                                           <h3><?php the_sub_field('question'); ?></h3>
                                           <div class="answer">
                                               <?php the_sub_field('answer'); ?>
                                           </div>
                                       <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <!-- // accordion  -->
                           </div>
                           <!-- // section  -->
                       <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // faq listing  -->


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