<?php get_header(); ?>

    <header id="masheader">
        <img alt="" src="https://merchantchimp.com/wp-content/uploads/2020/03/shape1.png" class="l-headerbg"> 
        <img alt="" src="https://merchantchimp.com/wp-content/uploads/2020/03/headerbg.png" class="r-headerbg">                
        <div class="caption">
            <div class="container">
                <div class="image-artwork-mob">
                    <img src="<?php the_field('product_image_hero_home'); ?>" alt="">
                </div>
                <h1><?php the_field('main_title_hero_home'); ?></h1>
                <?php the_field('content_block_hero_home'); ?>
                <?php if( get_field('button_label_hero_home') ): ?>
                    <a href="tel:<?php the_field('button_link_hero_phone'); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_hero_home'); ?></span></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="image-artwork">
            <div class="container container-new">
                <img src="<?php the_field('product_image_hero_home'); ?>" alt="">
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

                            <?php echo do_shortcode('[gravityform id="2"  title="false" description="false" tabindex="49"  ajax="true"]'); ?>

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

    <section id="about-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-block--intro">
                <header>
                    <h2><?php the_field('upper_title_intro_home'); ?></h2>
                    <h6><?php the_field('main_title_intro_home'); ?></h6>
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
        <section class="about-block--content about-welcome">
            <div class="container">
                <img src="https://merchantchimp.com/wp-content/uploads/2020/03/shape2.png" alt="" class="about-rshape">
                <div class="about-block--text">
                    <span class="title"><?php the_field('small_title_who_home_disc'); ?></span>
                    <h3><?php the_field('main_title_who_home_disc'); ?></h3>
                    <?php the_field('content_block_who_home_disc'); ?>
                    <a href="<?php the_field('button_link_who_home_disc'); ?>" class="book show-lg"><span><i class="far fa-long-arrow-right"></i> <?php the_field('button_label_who_home_disc'); ?></span></a>
                </div>
                <!-- /.about-block--text -->
                
                <div class="about-block--image">
                    <img src="https://merchantchimp.com/wp-content/uploads/2020/03/shape2.png" alt="" class="mobile-shape">
                    <img src="<?php the_field('featured_image_who_home_disc'); ?>" alt="">
                </div>
                <!-- /.about-block--image -->

                <div class="about-book-mobile">
                <a href="<?php the_field('button_link_who_home_disc'); ?>" class="book show-sm"><span><i class="far fa-long-arrow-right"></i> <?php the_field('button_label_who_home_disc'); ?></span></a>
                </div>
            </div>
        </section>
    </div>
    

    <div class="about-content-wrap">
        <section class="about-block--content">
            <div class="container">
                <img src="https://merchantchimp.com/wp-content/uploads/2020/03/shape2.png" alt="" class="about-rshape">
                <div class="about-block--text">
                    <span class="title"><?php the_field('small_title_who_home'); ?></span>
                    <h3><?php the_field('main_title_who_home'); ?></h3>
                    <?php the_field('content_block_who_home'); ?>
                    <a href="tel:<?php the_field('button_link_who_home'); ?>" class="book show-lg"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_who_home'); ?></span></a>
                </div>
                <!-- /.about-block--text -->
                <div class="about-block--image">
                    <img src="https://merchantchimp.com/wp-content/uploads/2020/03/shape2.png" alt="" class="mobile-shape">
                    <img src="<?php the_field('featured_image_who_home'); ?>" alt="">
                </div>
                <!-- /.about-block--image -->
                <div class="about-book-mobile">
                <a href="tel:<?php the_field('button_link_who_home'); ?>" class="book show-sm"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_who_home'); ?></span></a>
                </div>
            </div>
        </section>
        <!-- /.about-block--content -->
        <section class="about-block--content">
            <img src="https://merchantchimp.com/wp-content/uploads/2020/03/about-lshape.png" alt="" class="about-lshape">
            <div class="container">
                <div class="about-block--text">
                    <span class="title"><?php the_field('small_title_about_home'); ?></span>
                    <h3><?php the_field('main_title_about_home'); ?></h3>
                    <?php the_field('content_block_about_home'); ?>
                </div>
                <!-- /.about-block--text -->
                <div class="about-block--image">
                <img src="https://merchantchimp.com/wp-content/uploads/2020/03/about-lshape.png" alt="" class="mobile-shape">
                <img src="<?php the_field('featured_image_about_home'); ?>" alt="">
                </div>
                <!-- /.about-block--image -->
            </div>
        </section>
        <!-- /.about-block--content -->
    </div>
    <div class="quote-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (get_field('button_type_about_home') == 'Modal Form') { ?>
                        <a href="#"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_about_home'); ?></span></a>
                    <?php } elseif (get_field('button_type_about_home') == 'Inner Page') { ?>
                        <a href="<?php the_field('button_link_about_home'); ?>"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_about_home'); ?></span></a>
                    <?php } elseif (get_field('button_type_about_home') == 'Phone') { ?>
                        <a href="tel:<?php the_field('phone_number_about_home'); ?>"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_about_home'); ?></span></a>
                    <?php } ?>                       
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.quote-area -->
    </section>
    <!-- /#about-block -->
    <section id="benefits">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                <span class="title"><?php the_field('small_title_benefits_home'); ?></span>
                <h3><?php the_field('main_title_benefits_home'); ?></h3>
                <h6><?php the_field('subtitle_benefits_home'); ?></h6>
                </header>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <?php if( have_rows('benefits_list_home') ): ?>
               <?php while( have_rows('benefits_list_home') ): the_row(); ?>
                    <div class="col-md-4">
                        <div class="benefit-box">
                        <h4><?php the_sub_field('icon_code'); ?> <?php the_sub_field('title'); ?></h4>
                        <?php the_sub_field('content'); ?>
                        <a href="<?php the_sub_field('link_to_page'); ?>"></a>
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

    <div id="cafe-cta">
        <div class="container">
            <div class="cafe-wrapper">
                <a href="https://www.digitaljournal.com/pr/us-cafes-and-coffee-shops-vote-merchant-chimp-the-best-merchant-service-provider" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ico/award.png" alt="">
                    <h4>Merchant Chimp Voted The Best Merchant Service Provider by US Cafes and Coffee Shops </h4>

                    <span><i class="far fa-long-arrow-right"></i>Learn More</span>
                </a>
            </div>
        </div>
    </div>
    <!-- // cafe cta  -->

    <section id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                <span class="title"><?php the_field('small_title_test_home'); ?></span>
                <h3><?php the_field('main_title_test_home'); ?></h3>
                <h6><?php the_field('subtitle_test_home'); ?></h6>
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
                    $post_objects = get_field('select_testimonials_test_home');

                    if ($post_objects): ?>
                        <?php foreach ($post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
								
                                <div>
                                    <div class="testimonial-box">
                                        <blockquote>
                                            <?php the_field('testimonials_content'); ?>
                                        </blockquote>
                                        <footer>
                                            <span class="author"><?php the_title(''); ?> <br><small class="position"><?php the_field('position_test'); ?></small></span>
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
    <div class="shape"><img src="https://merchantchimp.com/wp-content/uploads/2020/03/usvsotherg.png" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                <span class="title"><?php the_field('small_title_compare_home'); ?></span>
                <h3><?php the_field('main_title_compare_home'); ?></h3>
                <?php the_field('content_block_compare_home'); ?>
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

    <section id="partners-list">
        <div class="container">
            <header>
                <h3>Who We Work With</h3>
            </header>
            <div class="partners">

                <?php if( have_rows('partners_list_gen', 'options') ): ?>
                <?php while( have_rows('partners_list_gen', 'options') ): the_row(); ?>

                    <div class="partner-logo">
                        <img src="<?php the_sub_field('company_logo'); ?>" alt="">
                    </div>
                    <!-- // logo  -->

                <?php endwhile; ?>
                <?php endif; ?>
                                    
            </div>
            <!-- // partners  -->
            <footer>
                <small>...And Many More, Just Ask! </small>
            </footer>
        </div>
        <!-- // container  -->
    </section>
    <!-- // partners list  -->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header>
                    <span class="title"><?php the_field('small_title_services_home'); ?></span>
                    <h3><?php the_field('main_title_services_home'); ?></h3>
                    </header>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <?php if( have_rows('list_of_serviecs_home') ): ?>
                   <?php while( have_rows('list_of_serviecs_home') ): the_row(); ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="services-box">
                        <?php the_sub_field('icon_code'); ?>
                        <h4><?php the_sub_field('title'); ?></h4>
                        <p><?php the_sub_field('text'); ?></p>
                        <a href="<?php the_sub_field('link_to_service'); ?>"></a>
                        </div>
                        <!-- /.services-box -->
                    </div>
                    <!-- /.col-md-4 -->                       
                   <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="list-all-wrap">
                    <a href="<?php the_field('button_link_services_home'); ?>"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_services_home'); ?></span></a>
                    </div>
                    <!-- /.list-all-wrap -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#services -->

    <section id="benefits-more">
    <section class="benefits-more--content">
        <img src="https://merchantchimp.com/wp-content/uploads/2020/03/benefit-rshape.png" alt="" class="benefit-rshape">
        <div class="container">
            <div class="benefit-block--text">
                <span class="title"><?php the_field('small_title_additional_home'); ?></span>
                <h3><?php the_field('main_title_additional_benefits'); ?></h3>
                <?php the_field('content_block_additional_home'); ?>
            </div>
            <!-- /.benefit-block--text -->
            <div class="benefit-block--image">
                <img src="<?php the_field('featured_image_additional_benefits'); ?>" alt="">
                <img src="https://merchantchimp.com/wp-content/uploads/2020/03/benefit-rshape.png" alt="" class="mobile-shape">
            </div>
            <!-- /.benefit-block--image -->
        </div>
    </section>
    <!-- /.benefit-block--content -->
    </section>
    <!-- /#benefits-more -->
    <section id="process">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                <span class="title"><?php the_field('small_title_process_home'); ?></span>
                <h3><?php the_field('main_title_process_home'); ?></h3>
                <p><?php the_field('intro_text_process_home'); ?></p>
                </header>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <?php if( have_rows('process_list_home') ): ?>
               <?php $i=1; ?>
               <?php while( have_rows('process_list_home') ): the_row(); ?>
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
                        <p><?php the_sub_field('text_process'); ?></p>
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
    <section id="industries">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                    <h3><?php the_field('main_title_industries_home'); ?></h3>
                </header>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div id="industries-slider">

                <?php
                $loop = new WP_Query( array( 'post_type' => 'industry', 'posts_per_page' => 15) ); ?>  
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div>
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


                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>  


                </div>
                <!-- /#industries-slider -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="notification">
                    <?php the_field('notification_content_industry_home'); ?>
                </div>
                <!-- /.notification -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="get-in-touch">
                    <?php if (get_field('button_type_industries') == 'Modal Form') { ?>
                        <a href="#"><span><i class="fas fa-phone-alt"></i><?php the_field('button_label_industries_home'); ?></span></a>
                    <?php } elseif (get_field('button_type_industries') == 'Inner Page') { ?>
                        <a href="<?php the_field('link_to_page_indu_cta'); ?>"><span><i class="fas fa-phone-alt"></i><?php the_field('button_label_industries_home'); ?></span></a>
                    <?php } elseif (get_field('button_type_industries') == 'Phone') { ?>
                        <a href="tel:<?php the_field('phone_number_industriy_home'); ?>"><span><i class="fas fa-phone-alt"></i><?php the_field('button_label_industries_home'); ?></span></a>
                    <?php } ?>                       
                </div>
                <!-- /.get-in-touch -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    </section>
    <!-- /#industries -->
    <section id="products">
    <div class="shape"><img src="https://merchantchimp.com/wp-content/uploads/2020/03/usvsotherg.png" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header>
                    <span class="title"><?php the_field('small_title_products_home'); ?></span>
                    <h3><?php the_field('main_title_products_home'); ?></h3>
                </header>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row products-wrap">

            <?php
            $loop = new WP_Query( array( 'post_type' => 'products', 'posts_per_page' => 35) ); ?>  
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="col-md-4">
                    <div class="product-box">
                    <div class="overlay"></div>
                    <img src="<?php the_field('cover_image_product'); ?>" alt="">
                    <a>
                        <h6><?php the_title(''); ?></h6>
                    </a>
                    <span class="product-box-mob-title"><?php the_title(''); ?></span>
                    </div>
                    <!-- /.product-box -->
                </div>
                <!-- /.col-md-4 -->

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>  

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="list-all-wrap">
                <a href="<?php the_field('button_link_products_home'); ?>"><span><i class="far fa-long-arrow-right"></i><?php the_field('button_label_products_home'); ?></span></a>
                </div>
                <!-- /.list-all-wrap -->
            </div>
            <!-- /.col-md-12 -->
        </div>
    </div>
    </section>
    <!-- /#products -->

    <?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>
    
<?php get_footer(''); ?>
