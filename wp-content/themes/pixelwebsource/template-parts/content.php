<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pixelwebsource_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ) { // check for feature image ?>
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div><!-- post-image -->
	<?php } ?>

	<div class="post-content">
		<header class="entry-header">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			
			<div class="post-details">
				<i class="fa fa-user"></i> <?php the_author(); ?>
				<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
				<i class="fa fa-folder"></i> <?php the_category(', '); ?>
				<i class="fa fa-tags"></i> <?php the_author(); ?>
			</div><!-- post-details -->

			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="post-excerpt">
			<?php the_excerpt(); ?>
			<a class="btn btn-success" href="#<?php // echo get_permalink($post->ID); ?>">Read More</a>
		</div>
	</div>
</article><!-- #post-## -->
