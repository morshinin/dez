<?php 
/**
 * Template Name: Главная страница
 *
 * File description
 *
 * @link link if present
 *
 * @package deztheme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main main-page" role="main">
			<div class="container">

				<?php
				$post_type = 'services';
				/**
				 * Выводим заголовки таксономий и пользовательские типы записей, относящиеся к этим таксономиям
				 * Код взят здесь: http://wordpress.stackexchange.com/questions/346/loop-through-custom-taxonomies-and-display-posts
				 */

				// Get all the taxonomies for this post type
				$taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type ) );

				foreach( $taxonomies as $taxonomy ) : 

				    // Gets every "category" (term) in this taxonomy to get the respective posts
				    $terms = get_terms( $taxonomy );

				    	$i = 1;
				    foreach( $terms as $term ) : 
				    	?>
				<div class="row">
					<?php if ( $i % 2 == 0 ) { ?>
					<?php 
						$div_class = 'col-lg-push-6';
						$div_class_2 = 'col-lg-pull-6';
						 } else { 
						$div_class = '';
						}
						 	?>
				        <?php 
							// if ( has_term_thumbnail() ) :
								// узнаем путь к миниатюре таксономии
								// используются теги плагина taxonomy thumbnail
							$thumb_id = get_term_thumbnail_id( $term->term_id );
							$thumb_url = wp_get_attachment_image_src( $thumb_id, 'deztheme-tax-thumbnail' );
							$thumb_url = $thumb_url ? reset( $thumb_url ) : false;
								// endif;				        
				         ?>
					<div class="services_thumbnail col-lg-6 <?php echo $div_class; ?>" style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('<?php echo $thumb_url; ?>') center / cover no-repeat">
					<ul class="list-unstyled">
						<?php
					        $posts = new WP_Query( "taxonomy=$taxonomy&term=$term->slug&posts_per_page=8" );

					        if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>
					        	<li>
					        		<a href="<?php echo get_the_permalink(); ?>">
					        			<?php the_title(); ?>
					        		</a>
					        	</li>
				            <?php
					        endwhile; endif;
					        ?>
					</ul>
			        </div><!-- .col-lg-6 -->
				        <div class="col-lg-4 col-lg-offset-1 <?php echo $div_class_2; ?>">
				         <h2>
				         	<?php echo $term->name; ?>
				         </h2>
				         <p>
				         	<?php echo $term->description; ?>
				         </p>
				         <p>
				         <a href="<?php echo get_term_link( $term->term_id ); ?>" class="btn btn-link">
				         	<?php _e( 'Подробнее >>', 'deztheme' ); ?>
				         </a>
				         <a href="#" class="btn btn-dark">
				         	<?php _e( 'Заказать', 'deztheme' ); ?>
				         </a></p>
				        <?php 
						$i+=1;
						?>
					</div><!-- .col-lg-6 -->
				</div><!-- .row -->
					<?php
						
				    endforeach;

				endforeach;
				wp_reset_postdata();
			 ?>
			</div><!-- .container -->
			<div class="container">
				<div class="row">
					<h2 class="main-page-section_title text-center">
						<?php _e( 'Акции', 'deztheme' ); ?>
					</h2>
				</div><!-- .row -->
				<div class="row">
					<div class="akcii-slider">
						<?php 
							$args = array( 
								'posts_per_page'		=>		3,
								'post_type'				=>		'akcii'
							 );
							$show_posts = new WP_Query( $args );
						 ?>
						 <?php 
						 	if ( $show_posts->have_posts() ) :
						 		while ( $show_posts->have_posts() ) :
						 			$show_posts->the_post();
						 			?>
						 			<div class="">
						 				<a href="<?php the_permalink(); ?>" class="thumbnail_link">
							 				<?php if ( has_post_thumbnail() ) : 
							 						the_post_thumbnail( '3-col-thumb' );
						 						endif;
							 				?>
							 				<?php the_title( '<h3 class="text-center">', '</h3>' ); ?>
							 				<?php the_excerpt(); ?>
						 				</a>
						 			</div><!-- .col-lg-4 -->
						 			<?php
						 		endwhile;
					 		endif;
					 		wp_reset_postdata();
						  ?>
				    </div><!-- .akcii-slider -->
				</div><!-- .row -->
			</div><!-- .container -->
			<div class="container">
				<div class="row">
					<h2 class="main-page-section_title text-center">
						<?php _e( 'Отзывы', 'deztheme' ); ?>
					</h2>
				</div><!-- .row -->
				<div class="row">
					<div class="otzyvy-slider">
					<?php 
						$args = array( 
							'posts_per_page'			=>		3,
							'post_type'					=>		'otzyvy'
						 );
						$show_posts = new WP_Query( $args );
					 ?>
					<?php 
						if ( $show_posts->have_posts() ) :
							while ( $show_posts->have_posts() ) :
								$show_posts->the_post();
								?>
								<div>
									<p>
										<?php the_time( 'd.m.Y' ); ?>
									</p>
									<p>
										<?php the_title( '<strong>', '</strong>' ); ?>
									</p>
									<p>
										<?php the_content(); ?>
									</p>
								</div>
								<?php
							endwhile;
						endif;
						wp_reset_postdata();
					 ?>
					</div><!-- .otzyvy-slider -->
				</div><!-- .row -->
			</div><!-- .container -->
			<div class="container">
				<div class="row">
					<h2 class="main-page-section_title text-center">
						<?php _e( 'Наши клиенты', 'deztheme' ); ?>
					</h2>
				</div><!-- .row -->
				<div class="row">
					<div class="klienty-slider">
					<?php 
						$args = array( 
							'posts_per_page'		=>		6,
							'post_type'				=>		'klienty'
						 );
						$show_posts = new WP_Query( $args );
					 ?>
					 <?php 
					 	if ( $show_posts->have_posts() ) :
					 		while ( $show_posts->have_posts() ) :
					 			$show_posts->the_post();
					 			?>
					 					<?php 
					 						// if ( has_post_thumbnail() ) :
					 							// $post_url = 
					 						// endif;
					 						// echo $post_url;
					 					 ?>
					 				<div style="height: 160px; background: url('<?php the_post_thumbnail_url( "2-col-thumbnail" ); ?>') center center / contain no-repeat;">
					 				</div>
					 			<?php
					 		endwhile;
				 		endif;
				 		wp_reset_postdata();
					  ?>
					</div><!-- .klienty-slider -->
				</div><!-- .row -->
			</div><!-- .container -->
			<div class="container">
				<div class="row">
					<div class="main-form col-lg-10 col-lg-offset-1">
						<p class="main-form_title text-center">
							<?php _e( 'Вызовите специалиста прямо сейчас!', 'deztheme' ); ?>
						</p>
						<?php echo do_shortcode( '[contact-form-7 id="1308" title="Без названия"]' ) ?>
					</div><!-- .col-lg-10 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
