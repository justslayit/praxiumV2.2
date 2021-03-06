<?php
/**
 * Template Name: Join Us Page
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="join-us"> 

					<div class="section-1">
								<div class="header">
									<h2><?php the_field('section_1_header'); ?></h2>
								</div>
								<div class="image">
									<img src="<?php the_field('section_1_image'); ?>">
								</div>
								<div class="text">
									<p><?php the_field('section_1_text'); ?></p>
								</div>
								<div class="button">
									<a href="<?php the_field('section_1_button'); ?>">Read More</a>
								</div>
 
					</div> 

				<div id="content-desktop"> 

					<div class="section-2">
							<div class="section-2-1">
									<div class="left">
										<img src="<?php the_field('section_2_image_1'); ?>">
										<h2><?php the_field('section_2_header_1'); ?></h2>
										<p><?php the_field('section_2_text_1'); ?></p>
									</div>
									<div class="right">
										<img src="<?php the_field('section_2_image_2'); ?>">
										<h2><?php the_field('section_2_header_2'); ?></h2>
										<p><?php the_field('section_2_text_2'); ?></p>
									</div>
							</div>
							<div class="section-2-2">
									<div class="left">
										<img src="<?php the_field('section_2_image_3'); ?>">
										<h2><?php the_field('section_2_header_3'); ?></h2>
										<p><?php the_field('section_2_text_3'); ?></p>
									</div>
									<div class="middle">
										<img src="<?php the_field('section_2_image_4'); ?>">
										<h2><?php the_field('section_2_header_4'); ?></h2>
										<p><?php the_field('section_2_text_4'); ?></p>
									</div>
									<div class="right">
										<img src="<?php the_field('section_2_image_5'); ?>">
										<h2><?php the_field('section_2_header_5'); ?></h2>
										<p><?php the_field('section_2_text_5'); ?></p>
									</div>
							</div>

					</div> 
				</div>

				<div id="content-mobile">

					<ul class="slides">

					    <li class="slide-container">
							<div class="slide">
								<img src="<?php the_field('section_2_image_1'); ?>">
								<h2><?php the_field('section_2_header_1'); ?></h2>
								<p><?php the_field('section_2_text_1'); ?></p>
					        </div>
					    </li>

					    <li class="slide-container">
					        <div class="slide">
					        	<img src="<?php the_field('section_2_image_2'); ?>">
								<h2><?php the_field('section_2_header_2'); ?></h2>
								<p><?php the_field('section_2_text_2'); ?></p>
					        </div>
					    </li>

					    <li class="slide-container">
					        <div class="slide">
								<img id="img3" src="<?php the_field('section_2_image_3'); ?>">
								<h2><?php the_field('section_2_header_3'); ?></h2>
								<p><?php the_field('section_2_text_3'); ?></p>
					        </div>
					    </li>

					    <li class="slide-container">
					        <div class="slide">
					        	<img src="<?php the_field('section_2_image_4'); ?>">
								<h2><?php the_field('section_2_header_4'); ?></h2>
								<p><?php the_field('section_2_text_4'); ?></p>
					        </div>
					    </li>

					    <li class="slide-container">
					        <div class="slide">
					        	<img src="<?php the_field('section_2_image_5'); ?>">
								<h2><?php the_field('section_2_header_5'); ?></h2>
								<p><?php the_field('section_2_text_5'); ?></p>
					        </div>
					    </li>
					  
					</ul>

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

</main>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();