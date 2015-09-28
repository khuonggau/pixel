<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pixelwebsource_Theme
 */

get_header(); ?>

	<!-- BLOG CONTENT
	===================================================== -->
	<div class="site-wrapper">
		<div class="container">
			<div class="row" id="primary">
				<main id="content" class="col-sm-8">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php the_post_navigation(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>

				</main><!-- content -->

				<aside class="col-sm-4">
					<?php get_sidebar(); ?>
				</aside>
			</div><!-- primary -->
		</div><!-- container -->
	</div><!-- site-wrapper -->

<?php get_footer(); ?>
