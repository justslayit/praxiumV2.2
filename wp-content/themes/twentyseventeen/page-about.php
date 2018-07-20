<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="about">

				<div class="section-1">
								<div class="left">
									<h2><?php the_field('section_1_header'); ?></h2>
									<p><?php the_field('section_1_text_1'); ?></p>
									<h4><?php the_field('section_1_text_2_header'); ?></h4>
									<p><?php the_field('section_1_text_2'); ?></p>
								</div>
								<div class="right">
									<img src="<?php the_field('section_1_image'); ?>">
								</div>
				</div>

				<div class="section-2">
						<div class="left">
								<h2><?php the_field('section_2_header'); ?></h2>
						</div>
							<div class="section-2-1">
									<div class="left">
										<img src="<?php the_field('section_2_image_1'); ?>">
									</div>
									<div class="right">
										<img src="<?php the_field('section_2_image_2'); ?>">
									</div>
							</div>
							<div class="section-2-2">
									<div class="left">
										<img src="<?php the_field('section_2_image_3'); ?>">
									</div>
									<div class="right">
										<img src="<?php the_field('section_2_image_4'); ?>">
									</div>
							</div>
							<div class="section-2-3">
									<div class="left">
										<img src="<?php the_field('section_2_image_5'); ?>">
									</div>
									<div class="right">
										<img src="<?php the_field('section_2_image_6'); ?>">
									</div>
							</div>
				</div>
									<div class="left">
										<p><?php the_field('section_2_text'); ?></p>
									</div>

				<div class="section-3">
						<div class="left">
							<h2><?php the_field('section_3_header'); ?></h2>
						</div>
								<div class="section-3-1">	
									<div class="left">
										<div>
											<img src="<?php the_field('section_3_image_1'); ?>">
										</div>
										<div>
											<h3><?php the_field('section_3_image_1_header'); ?></h3>
											<p><?php the_field('section_3_image_1_text'); ?></p>
										</div>
									</div>
									<div class="right">
										<div>
											<img src="<?php the_field('section_3_image_2'); ?>">
										</div>
										<div>
											<h3><?php the_field('section_3_image_2_header'); ?></h3>
											<p><?php the_field('section_3_image_2_text'); ?></p>
										</div>
									</div>
								</div>
								<div class="section-3-2">	
									<div class="left">
										<div>
											<img src="<?php the_field('section_3_image_3'); ?>">
										</div>
										<div>
											<h3><?php the_field('section_3_image_3_header'); ?></h3>
											<p><?php the_field('section_3_image_3_text'); ?></p>
										</div>
									</div>
									<div class="right">
										<div>
											<img src="<?php the_field('section_3_image_4'); ?>">
										</div>
										<div>
											<h3><?php the_field('section_3_image_4_header'); ?></h3>
											<p><?php the_field('section_3_image_4_text'); ?></p>
										</div>
									</div>
								</div>
				</div>

				<div class="section-4">
						<div class="left">
							<h2><?php the_field('section_4_header'); ?></h2>
						</div>
							<div class="section-4-1">
								<div class="left">
									<img src="<?php the_field('section_4_image_1'); ?>">
									<h3><?php the_field('section_4_image_1_header'); ?></h3>
									<p><?php the_field('section_4_image_1_text'); ?></p>
								</div>
								<div class="middle">
									<img src="<?php the_field('section_4_image_2'); ?>">
									<h3><?php the_field('section_4_image_2_header'); ?></h3>
									<p><?php the_field('section_4_image_2_text'); ?></p>
								</div>
								<div class="right">
									<img src="<?php the_field('section_4_image_3'); ?>">
									<h3><?php the_field('section_4_image_3_header'); ?></h3>
									<p><?php the_field('section_4_image_3_text'); ?></p>
								</div>
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
