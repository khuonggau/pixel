<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Pixelwebsource_Theme
 */

get_header(); ?>

	<div class="site-wrapper">
		<header>
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'pixelwebsource' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>

		<div class="container">
			<div id="primary" class="row">
				<main id="content" class="col-sm-8">
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #content -->
					
				<!-- SIDEBAR
				============================================ -->
				<aside class="col-sm-4">
					<?php get_sidebar(); ?>	
				</aside>
			</div><!-- primary -->
		</div><!-- container -->
	</div><!-- site-wrapper -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
