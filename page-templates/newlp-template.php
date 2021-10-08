<?php
/**
 * Template Name: Marketing New Landing Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('marketinglp');
$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="lp-masheader-new">
            <img src="<?php the_field('hero_image_mlp'); ?>" alt="" class="header-lp">
            <div class="caption">
                <div class="container">
                    <div class="logo__holder">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php the_field('website_logo_mlp'); ?>" alt="">
                        </a>
                    </div>
                    <!-- /.logo__holder -->
                    <div class="caption__holder">
                        <h1><?php the_field('main_title_mlp'); ?></h1>
                        <footer><a href="<?php the_field('button_link_mlp'); ?>"  data-toggle="modal" data-target="#contact-modal"><?php the_field('button_label_mlp'); ?></a></footer>
                    </div>
                    <!-- /.caption__holder -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.caption -->
        </header>
        <!-- /#lp-masheader-new -->
        <div id="lp-new">
            <section id="dropshipping">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="ds-video">
                                <?php
                                $imageID = get_field('featured_image_mlp');
                                $image = wp_get_attachment_image_src( $imageID, 'video-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 

                                <img class="img-responsive video-image" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                             
                                <a data-fancybox href="http://www.youtube.com/embed/H9PztEipjUI?autoplay=1">
                                <img src="<?php bloginfo('template_directory'); ?>/img/ico/play.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- /.col-lg-7 -->
                        <div class="col-lg-5">
                            <div class="ds-content">
                                <h2><?php the_field('main_title_video_mlp'); ?></h2>
                                <?php the_field('content_block_mlp'); ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                    You are almost there (75%)…
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col-md-12 -->
                                    </div>
                                    <!-- /.row -->

                                <?php the_field('form_code_hero_mlp'); ?>
                            </div>
                            <!-- /.ds-content -->
                        </div>
                        <!-- /.col-lg-5 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /#dropshipping -->
            <section id="top-paralax">
                <div class="bcg" data-top-bottom="background-position: 50% -100px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target="#top-paralax" style="background-image:url(<?php the_field('background_image_cta_mlp'); ?>);">
                    <div class="overlay"></div>
                    <div class="caption">
                        <div class="container">
                            <div class="caption__holder">
                                <h3><?php the_field('main_title_cta_mlp'); ?></h3>
                                <h6><?php the_field('subtitle_cta_mlp'); ?></h6>
                                <?php the_field('content_block_cta_mlp'); ?>
                                <a href="<?php the_field('button_link_cta_mlp'); ?>"  data-toggle="modal" data-target="#contact-modal" class="see-btn"><?php the_field('button_label_cta_mlp'); ?></a>
                            </div>
                            <!-- /.caption__holder -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.caption -->
                </div>
            </section>
            <!-- /#top-paralax -->
            <div id="clients-area-lp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php the_field('main_title_test_mlp'); ?></h2>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">

                            <?php if( have_rows('testimonials_list_mlp') ): ?>
                               <?php while( have_rows('testimonials_list_mlp') ): the_row(); ?>
                                    <section class="client-block">
                                        <div class="client-content">
                                            <h3><?php the_sub_field('title'); ?></h3>
                                            <?php the_sub_field('content_block'); ?>
                                            <a href="<?php the_sub_field('button_link'); ?>"  data-toggle="modal" data-target="#contact-modal" class="try"><?php the_sub_field('button_label'); ?></a>
                                        </div>
                                        <!-- /.client-content -->
                                        <div class="client-image">
                                            <?php
                                            $imageID = get_sub_field('client_photo');
                                            $image = wp_get_attachment_image_src( $imageID, 'test-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <div class="author">
                                                <span class="name"><?php the_sub_field('title'); ?></span>
                                                <span class="title"><?php the_sub_field('position'); ?></span>
                                            </div>
                                            <!-- /.author -->
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
            <section id="testimonial-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php the_field('main_title_video_test_mlp'); ?></h4>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row testimonial-row">
                        <?php if( have_rows('video_list_test_lpm') ): ?>
                           <?php while( have_rows('video_list_test_lpm') ): the_row(); ?>
                                <div class="col">
                                    <div class="testimonial-box">
                                        <div class="testimonial-video">
                                            <?php the_sub_field('video_code'); ?>
                                            <p><?php the_sub_field('title'); ?></p>
                                        </div>
                                        <!-- /.testimonial-video -->
                                        <div class="testimonial-content">
                                            <?php the_sub_field('description'); ?>
                                        </div>
                                        <!-- /.testimonial-content -->
                                    </div>
                                    <!-- /.testimonial-box -->
                                </div>
                                <!-- /.col -->                               
                           <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- /.row testimonial-row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial-button">
                                <a href="<?php the_field('button_link_footer_video_lpm'); ?>"  data-toggle="modal" data-target="#contact-modal"><?php the_field('button_label_footer_video_lpm'); ?></a>
                            </div>
                            <!-- /.testimonial-button -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /#testimonial-section -->

            <section id="middle-paralax">
                <div class="bcg" data-top-bottom="background-position: 50% -100px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target="#middle-paralax" style="background-image:url(<?php the_field('background_image_cta_mlp_mid'); ?>);">
                    <div class="overlay"></div>
                    <div class="caption">
                        <div class="container">
                            <div class="caption__holder">
                                <h3><?php the_field('main_title_cta_mlp_mid'); ?></h3>
                                <h6><?php the_field('subtitle_cta_mlp_mid'); ?></h6>
                                <?php the_field('content_block_cta_mlp_mid'); ?>
                                <a href="<?php the_field('button_link_cta_mlp_mid'); ?>"  data-toggle="modal" data-target="#contact-modal" class="see-btn"><?php the_field('button_label_cta_mlp_mid'); ?></a>
                            </div>
                            <!-- /.caption__holder -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.caption -->
                </div>
            </section>
            <!-- /#middle-paralax -->

            <section id="benefits">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php the_field('main_title_why_mlp'); ?></h2>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <?php if( have_rows('why_list_mlp') ): ?>
                           <?php while( have_rows('why_list_mlp') ): the_row(); ?>
                                <div class="col-md-4">
                                    <div class="benefit-box">
                                        <h4><?php the_sub_field('icon_code'); ?> <?php the_sub_field('title'); ?></h4>
                                        <p><?php the_sub_field('content_block'); ?></p>
                                    </div>
                                    <!-- /.benefit-box -->
                                </div>
                                <!-- /.col-md-4 -->                               
                           <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="benefits-button">
                                <a href="<?php the_field('button_link_why_mlp'); ?>"  data-toggle="modal" data-target="#contact-modal"><?php the_field('button_label_why_mlp'); ?></a>
                            </div>
                            <!-- /.benefits-button -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /#benefits -->
            <section id="process">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <header>
                                <!--<span class="title">The process</span>-->
                                <h3><?php the_field('main_title_how_mlp'); ?></h3>
                                <?php the_field('intro_text_how_mlp'); ?>
                            </header>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <?php if( have_rows('steps_blocks_rep_mlp') ): ?>
                           <?php while( have_rows('steps_blocks_rep_mlp') ): the_row(); ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="process-box">
                                    <div class="proces-ico-wrap">
                                        <div class="num"><span><?php the_sub_field('step_number'); ?></span></div>
                                        <div class="process-ico">
                                            <?php the_sub_field('icon_code'); ?>
                                        </div>
                                        <!-- /.process-ico --> 
                                    </div>
                                    <!-- /.proces-ico-wrap -->
                                    <h4><?php the_sub_field('title'); ?></h4>
                                    <?php the_sub_field('description'); ?>
                                </div>
                                <!-- /.process-box -->
                            </div>
                            <!-- /.col-md-6 col-lg-3 -->                               
                           <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <section id="better-fees">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php the_field('main_title_bottom_cta_lpm'); ?></h4>
                            <h5><?php the_field('subtitle_bottom_cta_bpm'); ?></h5>
                            <div class="f-txt">
                                <?php the_field('content_block_bottom_cta_bpm'); ?>
                            </div>
                            <a href="<?php the_field('button_link_bottom_cta_bpm'); ?>" data-toggle="modal" data-target="#contact-modal" class="try"><?php the_field('button_label_bottom_cta_bpm'); ?></a>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /#better-fees -->
        </div>
        <!-- /#lp-new -->

<?php get_footer('marketinglp'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>

<!-- Modal -->
<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contact-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php the_field('popup_title_pop_contact'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <?php the_field('content_block_pop_con'); ?>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                You are almost there (75%)…
            </div>
        </div>        
        <?php the_field('form_code_pop_cod'); ?>
      </div>

    </div>
  </div>
</div>