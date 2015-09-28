<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pixelwebsource_Theme
 */

get_header(); ?>

	<div class="site-wrapper">
	    <h1>Blog</h1>

	    <ul class="masonry">
			<!--<li class="item">
				<article class="post">
					<div class="post-image">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/photos/thankyou.jpg" alt="Post image">
					</div>
					<div class="post-content">
						<header>
							<h3><a href="post.html">Blog title here</a></h3>
							<div class="post-details">
								<i class="fa fa-user"></i> Khuonggau
								<i class="fa fa-clock-o"></i> <time>August 24, 2015</time>
								<i class="fa fa-folder"></i> <a href="">Tutorials</a>, <a href="">Coding</a>
								<i class="fa fa-tags"></i> Tagged <a href="">wordpress</a>, <a href="">premium</a>, <a href="">another tag</a>, <a href="">yadda yadda</a>
							</div><!-- post-details -->
						<!-- </header>
						<div class="post-excerpt">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur blanditiis, neque ducimus dolore a tempore nesciunt eius quaerat eos molestiae, maxime nam repudiandae eligendi rem excepturi reprehenderit necessitatibus modi, magnam...</p>
							<a class="btn btn-success" href="">Read More</a>
						</div>
					</div>
				</article>
			</li> -->
			

			<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<li class="item">

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

				</li>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		
		</ul>
	</div><!-- site-wrapper -->
</div><!-- main-wrapper -->

<?php get_footer(); ?>