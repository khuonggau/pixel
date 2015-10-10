<div class="site-wrapper">
  	<div class="site-wrapper-inner">
        <div class="cover-container">
	        <div class="inner cover">
  				<?php while ( have_posts() ) : the_post(); ?>

              	<?php the_content(); ?>
              	
  				<?php endwhile; wp_reset_query(); ?>
	        </div><!-- inner -->
        </div><!-- cover-container -->
  	</div><!-- site-wrapper-inner -->
</div><!-- site-wrapper -->