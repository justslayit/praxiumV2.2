<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="contact">
					<div class="section-1">
								<div class="left">
									<div>
										<h2><?php the_field('section_1_header'); ?></h2>
										<h4><?php the_field('section_1_text_1_header'); ?></h4>
										<p><?php the_field('section_1_text_1'); ?></p>
									</div>

									<div class="social">
										<img src="<?php the_field('section_1_image_1'); ?>">
										<img src="<?php the_field('section_1_image_2'); ?>">
										<img id="img3" src="<?php the_field('section_1_image_3'); ?>">
									</div>

									<div class="info">
										<div>
											<h4><?php the_field('section_1_text_2_header'); ?></h4>
											<p><?php the_field('section_1_text_2'); ?></p>
										</div>
										<div>
											<h4><?php the_field('section_1_text_3_header'); ?></h4>
											<p><?php the_field('section_1_text_3'); ?></p>
										</div>
									</div>
								</div>

								<div class="right">
									<p><?php echo do_shortcode( '[contact-form-7 id="77" title="Contact Form"]' ); ?></p>
								</div>
					</div>

					<!-- <div class="section-2">
								<div class="left">
									<h2 class="header"><?php the_field('section_2_header'); ?></h2>
									<p class="text"><?php the_field('section_2_text'); ?></p>
									<a class="button" href="<?php the_field('section_2_button'); ?>">Subscribe</a>
								</div>
								<div class="right">
									<img class="image" src="<?php the_field('section_2_image'); ?>">
								</div>
					</div>
					<div class="caption">
								<div class="one">
									<h4><?php the_field('section_2_text_2'); ?></h4>
									<p><?php the_field('section_2_text_3'); ?></p>
								</div>
								<div class="two">
									<h4><?php the_field('section_2_text_4'); ?></h4>
									<p><?php the_field('section_2_text_5'); ?></p>
								</div>
					</div> -->


					<div class="section-2">
								<div class="header">
									<h2><?php the_field('section_2_header'); ?></h2>
								</div>
								<div class="image">
									<img src="<?php the_field('section_2_image'); ?>">
								</div>
								<div class="caption">
									<div class="one">
										<h4><?php the_field('section_2_text_2'); ?></h4>
										<p><?php the_field('section_2_text_3'); ?></p>
									</div>
									<div class="two">
										<h4><?php the_field('section_2_text_4'); ?></h4>
										<p><?php the_field('section_2_text_5'); ?></p>
									</div>
								</div>
								<div class="text">
									<p><?php the_field('section_2_text'); ?></p>
								</div>
								<div class="button">
									<a href="<?php the_field('section_2_button'); ?>">Subscribe</a>
								</div>
					</div>

				</div>


				<div class="entry-content">
					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();