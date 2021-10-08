<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



	<div id="blogs">
	<div class="container">
		<div class="row blogs-detailed">
			<div class="col">
				<aside>
				<div class="button">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="blog-menu">
					<h5>RECENT POSTS</h5>
					<ul>
						<?php 
							// the query
							$the_query = new WP_Query( array(
								'posts_per_page' => 5,
							)); 
						?>

							<?php if ( $the_query->have_posts() ) : ?>
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>           

								<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>

						<?php else : ?>
							<p><?php __('No News'); ?></p>
						<?php endif; ?>
									
					</ul>
				</div>
				<!-- /.blog-menu -->
				</aside>
			</div>
			<!-- /.col-->
			<div class="col">
				<div class="blog-intro">
				<div class="intro-heading">
					<div class="overlay"></div>
					<!-- /.overlay -->
						<?php 
						$values = get_field( 'featured_image_blog' );
						if ( $values ) { ?>

							<?php
							$imageID = get_field('featured_image_blog');
							$image = wp_get_attachment_image_src( $imageID, 'blogcover-image' );
							$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
							?> 

							<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 

						<?php 
						} else { ?>
							<img src="<?php bloginfo('template_directory'); ?>/img/misc/blog-intro.jpg" alt="">
						<?php } ?>

					<h1><?php the_title(''); ?></h1>
				</div>
					<!-- /.intro-heading --> 
				<span class="date"><i class="far fa-clock"></i><?php echo get_the_date( 'F j, Y' ); ?>
				/ Posted in
                            
                            <?php
                            global $post;
                            $categories = get_the_category($post->ID);
                            $cat_link = get_category_link($categories[0]->cat_ID);
                            echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                            ?> 
				</span>
					<div class="author-desc">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
						<div class="author-content">
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
							<p><?php the_author_description(); ?></p>
						</div>
						<!-- /.author-content -->
					</div>
				</div>
				<!-- /.blog-intro -->

				<div class="blog-content">

				<?php
						// check if the flexible content field has rows of data
						if( have_rows('content_layout_blog') ):

							// loop through the rows of data
							while ( have_rows('content_layout_blog') ) : the_row();

								if( get_row_layout() == 'intro_text' ): ?>

						

									<div class="intro__content">
										<?php the_sub_field('intro_content'); ?>
									</div>
									<!-- // intro  -->

								

								<?php elseif( get_row_layout() == 'full_width_content' ): ?>

							

										<div class="main__content blog-main-content">
											<?php the_sub_field('content_block'); ?>
										</div>

									

								<?php elseif( get_row_layout() == 'full_width_image' ): ?>

										<div class="image__inner">
											<?php
											$imageID = get_sub_field('featured_image');
											$image = wp_get_attachment_image_src( $imageID, 'blogfeat-image' );
											$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
											?> 

											<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
										</div>
										<!-- // inner image  -->

								<?php elseif( get_row_layout() == 'featured_article' ): ?>    
                                    <?php
                                        $post_objects = get_sub_field('featured_article_list');

                                        if( $post_objects ): ?>
                                            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                <?php setup_postdata($post); ?>
                                                    
                                                <div class="featured-article-box">
													<div class="blog-box">
														<div class="blog-image">
															<a href="<?php echo get_permalink(); ?>" target="_blank">
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

															</a>
														</div>
														<!-- /.blog-image -->
														<div class="blog-text">
															<h3><a href="<?php echo get_permalink(); ?>" target="_blank"><?php the_title(''); ?></a></h3>
															<footer>
																<a class="readmore" href="<?php echo get_permalink(); ?>" target="_blank">Read More</a>
															</footer>
														</div>
														<!-- /.blog-text -->
													</div>
													<!-- /.blog-box -->
                                                </div>
                                                <!-- /.featured-article -->
                                                    
                                            <?php endforeach; ?>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>
                                    <?php wp_reset_postdata(); ?>

										<?php elseif( get_row_layout() == 'table' ): ?>

											<table style="width:100%" class="single-table">
												<thead>
													<tr role="row">

													<?php

														// check if the repeater field has rows of data
														if(have_rows('table_head_cells')):

															// loop through the rows of data
															while(have_rows('table_head_cells')) : the_row();

																$hlabel = get_sub_field('table_cell_label_thead');

																?>  

																<th tabindex="0" rowspan="1" colspan="1"><?php echo $hlabel; ?></th>

															<?php endwhile;

														else :
															echo 'No data';
														endif;
														?>

													</tr>
												</thead>
												<tbody>

												<?php while ( have_posts() ) : the_post(); ?>

													<?php 

													// check for rows (parent repeater)
													if( have_rows('table_body_row') ): ?>
														
														<?php 

														// loop through rows (parent repeater)
														while( have_rows('table_body_row') ): the_row(); ?>

																<?php 

																// check for rows (sub repeater)
																if( have_rows('table_body_cells') ): ?>
																	<tr>
																		<?php 

																		// loop through rows (sub repeater)
																		while( have_rows('table_body_cells') ): the_row();

																			
																			?>
																			<td><?php the_sub_field('table_cell_label_tbody'); ?></td>
																		<?php endwhile; ?>
																	</tr>
																<?php endif; //if( get_sub_field('') ): ?>

														<?php endwhile; // while( has_sub_field('') ): ?>
															
													<?php endif; // if( get_field('') ): ?>

													<?php endwhile; // end of the loop. ?>
													
												</tbody>
											</table>   
						

								<?php endif;

							endwhile;

						else :

							// no layouts found

						endif;

						?>
				</div>

			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
	
    <?php include(TEMPLATEPATH . '/inc/quote-inc.php'); ?>

	<section class="similar-posts first-child-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Recent posts</h2>
					<div class="posts-list">
						<div class="row">

						<?php
							$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3,'post__not_in'          =>  [ $post->ID ]) ); ?>  
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<div class="col-lg-4 col-md-6">
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
										<footer>
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
							<!-- /.col-lg-4 col-md-6 --> 

								<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>    
						<?php wp_reset_query(); ?>

						</div>
						<!-- /.row -->
					</div>
					<!-- /.posts-list -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.similar-posts -->

	<section class="similar-posts last-child-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Related posts</h2>
					<div class="posts-list">
						<div class="row">

							<?php
								$categories =   get_the_category();
								// print_r($categories);
								$rp_query   =  new WP_Query ([
									'posts_per_page'        =>  3,
									'post__not_in'          =>  [ $post->ID ],
									'cat'                   =>  !empty($categories) ? $categories[0]->term_id : null,

								]);

								if ( $rp_query->have_posts() ) {
									while( $rp_query->have_posts() ) {
										$rp_query->the_post();
										?>

										<div class="col-lg-4 col-md-6">
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
													<footer>
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
										<!-- /.col-lg-4 col-md-6 --> 

										<?php
									}

									wp_reset_postdata();

								}

							?>

						</div>
						<!-- /.row -->
					</div>
					<!-- /.posts-list -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.similar-posts -->

<?php get_footer(); ?>
