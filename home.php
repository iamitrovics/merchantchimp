<?php get_header(); ?>

<header id="masheader">
   <img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/shape1.png" class="l-headerbg"> 
   <img alt="" src="<?php bloginfo('template_directory'); ?>/img/bg/headerbg.png" class="r-headerbg">                
   <div class="caption">
      <div class="container">
         <div class="image-artwork-mob">
            <img src="<?php bloginfo('template_directory'); ?>/img/misc/header-image.png" alt="">
         </div>
         <h1><?php the_field('custom_title_blog_header', get_option('page_for_posts')); ?></h1>
         <?php the_field('intro_content_blog_listing', get_option('page_for_posts')); ?>
         <a href="tel:<?php the_field('button_link_blog_listing', get_option('page_for_posts')); ?>" class="book"><span><i class="fas fa-phone-alt"></i> <?php the_field('button_label_blog_listing', get_option('page_for_posts')); ?></span></a>
      </div>
   </div>
   <div class="image-artwork">
      <div class="container container-new">
         <img src="<?php bloginfo('template_directory'); ?>/img/misc/header-image.png" alt="">
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



<div id="blogs">


   <div class="container">
      <div class="row blog-list">

       <?php
          $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
          $args = array(
            'posts_per_page' => 8, // the value from Settings > Reading by default
            'paged'          => $current_page // current page
          );
          query_posts( $args );
           
          $wp_query->is_archive = true;
          $wp_query->is_home = false;
           
          while(have_posts()): the_post();
            ?>
                              
            <div class="col-md-6">
                <div class="blog-box">
                <div class="blog-image">

                     <?php 
                     $values = get_field( 'featured_image_blog' );
                     if ( $values ) { ?>

                        <?php
                        $imageID = get_field('featured_image_blog');
                        $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                        ?> 

                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 

                     <?php 
                     } else { ?>

                        <img src="<?php bloginfo('template_directory'); ?>/img/misc/blogs.jpg" alt="">

                     <?php } ?>

                    <a href="<?php echo get_permalink(); ?>"></a>
                </div>
                <!-- /.blog-image -->
                <div class="blog-text">
                    <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(''); ?></a></h3>
                    <div class="blog-content">
                       <?php the_field('excerpt_text'); ?>
                    </div>
                    <footer>
                        <div class="article-info">
                            <span class="date"><i class="far fa-clock"></i><?php echo get_the_date( 'F j, Y' ); ?></span>
                            <span class="author">Author : <?php the_author(); ?></span>
                        </div>
                        <!-- /.article-info -->
                        <div class="readmore">
                            <a href="<?php echo get_permalink(); ?>">Read More</a>
                        </div>
                        <!-- /.readmore -->
                    </footer>
                </div>
                <!-- /.blog-text -->
                </div>
                <!-- /.blog-box -->
            </div>
            <!-- /.col-md-6 -->                           
          
        <?php
      endwhile;
      ?>

      </div>
      <!-- /.row -->

      <nav class="pagination-block">
        <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
      </nav>    

   </div>
   <!-- /.container -->

   <?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>
  
<?php get_footer(''); ?> 