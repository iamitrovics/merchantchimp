<?php
/**
 * Template Name: Services Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="photo-header" class="services-header">
    <img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/shape1.png" class="l-headerbg"> 
    <img alt="" src="<?php bloginfo('template_directory'); ?>/img/headers/industries.png" class="r-headerbg">                
    <div class="caption">
        <div class="container">
            <h1><?php the_field('custom_title_services_header'); ?></h1>
            <?php the_field('intro_content_services_header'); ?>
            <a href="tel:<?php the_field('button_link_services_header'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_services_header'); ?></span></a>
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
    <div id="services-listing">
    <section id="services-into-block">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <header>
                    <h2><?php the_field('main_title_services_page_intro'); ?></h2>
                    <?php the_field('content_block_services_page_intro'); ?>
                </header>
            </div>
            <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#services-into-block -->

    <div id="services-list-block">

        <?php if( have_rows('services_list_page') ): ?>
            <?php while( have_rows('services_list_page') ): the_row(); ?>
                <?php if( get_row_layout() == 'image_left_content_right' ): ?>

                    <section class="services-list-box">
                        <img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="about-lshape">
                        <div class="container">
                            <div class="about-block--text">
                            <span class="title"><?php the_sub_field('small_title'); ?></span>
                            <h3><?php the_sub_field('main_title'); ?></h3>
                            <?php the_sub_field('content_block'); ?>

                                <?php if (get_sub_field('button_type') == 'Link to page') { ?>
                                    <a href="<?php the_sub_field('link_to_page'); ?>"><span><i class="far fa-long-arrow-right"></i> <?php the_sub_field('button_label'); ?></span></a>
                                <?php } elseif (get_sub_field('button_type') == 'Phone') { ?>
                                    <a href="tel:<?php the_sub_field('phone_number'); ?>"><span><i class="fas fa-phone-alt"></i> <?php the_sub_field('button_label'); ?></span></a>
                                <?php } ?>   

                            </div>
                            <!-- /.about-block--text -->
                            <div class="about-block--image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/bg/about-lshape.png" alt="" class="mobile-shape">
                            <img src="<?php the_sub_field('featured_image'); ?>" alt="">
                            </div>
                        </div>
                    </section>
                    <!-- /.services-list-box -->

                <?php elseif( get_row_layout() == 'image_right_content_left' ):  ?>

                    <section class="services-list-box">
                        <img src="<?php bloginfo('template_directory'); ?>/img/bg/benefit-rshape.png" alt="" class="about-lshape">
                        <div class="container">
                            <div class="about-block--text">
                            <span class="title"><?php the_sub_field('small_title'); ?></span>
                            <h3><?php the_sub_field('main_title'); ?></h3>
                            <?php the_sub_field('content_block'); ?>
                                <?php if (get_sub_field('button_type') == 'Link to page') { ?>
                                    <a href="<?php the_sub_field('link_to_page'); ?>"><span><i class="far fa-long-arrow-right"></i> <?php the_sub_field('button_label'); ?></span></a>
                                <?php } elseif (get_sub_field('button_type') == 'Phone') { ?>
                                    <a href="tel:<?php the_sub_field('phone_number'); ?>"><span><i class="fas fa-phone-alt"></i> <?php the_sub_field('button_label'); ?></span></a>
                                <?php } ?>   

                            </div>
                            <!-- /.about-block--text -->
                            <div class="about-block--image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/bg/benefit-rshape.png" alt="" class="mobile-shape">
                            <img src="<?php the_sub_field('featured_image'); ?>" alt="">
                            </div>
                        </div>
                    </section>
                    <!-- /.services-list-box -->                    

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <!-- /#services-list-block -->

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
                    $post_objects = get_field('list_of_testimonials_services');

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


    <section id="comparison">
        <div class="shape"><img src="<?php bloginfo('template_directory'); ?>/img/bg/usvsotherg.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <header>
                    <span class="title"><?php the_field('small_title_compare_general', 'options'); ?></span>
                    <h3><?php the_field('main_title_compare_general', 'options'); ?></h3>
                    <?php the_field('content_block_compare_general', 'options'); ?>
                </header>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <div class="col-md-12">
                <div class="comparison-table">
                <table>
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th><i class="fab fa-stripe"></i></th>
                            <th><img src="https://merchantchimp.com/wp-content/uploads/2020/03/compar2.png" alt=""></th>
                            <th><i class="fab fa-paypal"></i></th>
                            <th><img src="https://merchantchimp.com/wp-content/uploads/2020/03/compar4.png" alt=""></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Interchange Rates </td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Transparent Pricing Rates</td>
                            <td><i class="fas fa-check-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Low Transaction Costs</td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Month-to-Month Agreement</td>
                            <td><i class="fas fa-check-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Dedicated account exec with direct line</td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Next-day Funding</td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Financing/Loans</td>
                            <td><i class="fas fa-check-circle"></i></td>    
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-check-circle"></i></td>                            
                        </tr>
                        <tr>
                            <td>Variety of POS Hardware Models</td>
                            <td><i class="fas fa-times-circle"></i></td>  
                            <td><i class="fas fa-check-circle"></i></td>    
                            <td><i class="fas fa-times-circle"></i></td>
                            <td><i class="fas fa-check-circle"></i></td>                                
                        </tr>
                    </tbody>
                </table>
                </div>
                <!-- /.comparison-table -->
                <div class="comparison-table-mobile">
                <div class="row">
                    <div class="col">
                        <div class="feature-column">
                            <ul>
                            <li>&nbsp;</li>
                            <li>Interchange rates</li>
                            <li>Transparent pricing rates</li>
                            <li>Low transaction costs</li>
                            <li>Month-to-month contract</li>
                            <li>Dedicated account exec with direct line</li>
                            <li>Next-day Fubding</li>
                            <li>Financing/Loans</li>
                            <li>Variety of POS Hardware Models</li>
                            </ul>
                        </div>
                        <!-- /.feature-column -->
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <div id="info-table-slider">
                            <div>
                            <span><i class="fab fa-stripe"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                           
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>                            
                            </div>
                            <div>
                            <span><img src="https://merchantchimp.com/wp-content/uploads/2020/03/compar2.png" alt=""></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>                         
                            </div>
                            <div>
                            <span><i class="fab fa-paypal"></i></span>
                            <span> <i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>
                            <span> <i class="fas fa-times-circle"></i></span>
                            <span><i class="fas fa-times-circle"></i></span>  
                            <span><i class="fas fa-times-circle"></i></span>                            
                            </div>
                            <div>
                            <span><img src="https://merchantchimp.com/wp-content/uploads/2020/03/compar4.png" alt=""></span>
                            <span><i class="fas fa-check-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>
                            <span><i class="fas fa-check-circle"></i></span>                         
                            </div>
                        </div>
                        <!-- /#info-table-slider -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.comaprison-table-mobile -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#comparison -->

	<?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

<?php get_footer(); ?>
