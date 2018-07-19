<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" >
					<div class="panel-content">
						<div class="wrap">

							<div class="section-1">
								<div class="left">
									<h2><?php the_field('section_1_header'); ?></h2>
									<p><?php the_field('section_1_text'); ?></p>
									<a href="<?php the_field('section_1_button'); ?>">Read More</a>
								</div>
								<div class="right">
									<img src="<?php the_field('section_1_image'); ?>">
								</div>
							</div>

							<div class="section-2">
								<div class="left">
									<img src="<?php the_field('section_2_image'); ?>">
								</div>
								<div class="right">
									<h2><?php the_field('section_2_header'); ?></h2>
									<p><?php the_field('section_2_text'); ?></p>
									<a href="<?php the_field('section_2_button'); ?>">Read More</a>
								</div>
							</div>

							<div class="entry-content">
								<?php
									/* translators: %s: Name of current post */
									the_content( sprintf(
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
										get_the_title()
									) );
								?>
							</div><!-- .entry-content -->

						</div><!-- .wrap -->
					</div><!-- .panel-content -->
				</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
