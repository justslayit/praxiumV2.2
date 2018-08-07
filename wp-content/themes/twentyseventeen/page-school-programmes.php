<?php
/**
 * Template Name: School Programmes Page
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="school-programme-primary content-area">
		<main id="main" class="site-main" role="main">


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="school-programmes">

				<div class="section-1">
								<div class="top">
									<h3><?php the_field('section_1_top'); ?></h3>
								</div>
								<div class="header header-section">
									<h2><?php the_field('section_1_header'); ?></h2>
								</div>
								<div class="text text-open">
									<p><?php the_field('section_1_text'); ?></p>
								</div>
								<div class="button">
									<a href="<?php the_field('section_1_button'); ?>">Read More</a>
								</div>
				</div>

				<div class="section-2">
								<div class="top">
									<h3><?php the_field('section_2_top'); ?></h3>
								</div>
								<div class="header header-section">
									<h2><?php the_field('section_2_header'); ?></h2>
								</div>
								<div class="text text-open">
									<p><?php the_field('section_2_text'); ?></p>
								</div>
								<div class="button">
									<a href="<?php the_field('section_2_button'); ?>">Read More</a>
								</div>
				</div>

				<div class="section-3">
								<div class="top">
									<h3><?php the_field('section_3_top'); ?></h3>
								</div>
								<div class="header header-section">
									<h2><?php the_field('section_3_header'); ?></h2>
								</div>
								<div class="text text-open">
									<p><?php the_field('section_3_text'); ?></p>
								</div>
								<div class="button">
									<a href="<?php the_field('section_3_button'); ?>">Read More</a>
								</div>
				</div>

				<div class="section-4">
						<div class="left">
							<p><?php echo do_shortcode( '[contact-form-7 id="126" title="Contact Form (School Programmes Page)"]' ); ?></p>
						</div>
						<div class="right">
								<div class="header">
									<h2><?php the_field('section_4_header'); ?></h2>
								</div>
								<div class="text">
									<p><?php the_field('section_4_text'); ?></p>
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
