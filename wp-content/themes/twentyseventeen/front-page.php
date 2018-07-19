<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();  ?>



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



			<?php endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
