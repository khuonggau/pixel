<?php
/**
 * Description: Content for Contact Us page
 */
?>
<div class="site-wrapper">
  	<div class="site-wrapper-inner">
        <div class="inner cover">
            <h1 class="cover-heading"><span>Contact </span>Us </h1>

			<?php while ( have_posts() ) : the_post(); ?>

            	<?php the_content(); ?>
            	
			<?php endwhile; wp_reset_query(); ?>

            <ul class="ul-contact">
				
				<?php $loop = new WP_Query( array( 'post_type' => 'contact_us', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

				<?php
				// featured image of Prices Post
				$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
				?>

				<li class="contact-item">
					<div class="contact-image">
						<div class="img" style="background: url(<?php echo $thumbnail_url; ?>) no-repeat center bottom;"></div>
					</div>
					<div class="contact-text">
						<div class="tit"><?php the_title(); ?></div>
						<?php the_content(); ?>
					</div>
				</li>
				
				<?php endwhile; wp_reset_query(); ?>

			</ul>
            <a id="show-contact-form">Write to Us<span></span></a><div class="clear"></div>
	        <div id="contact-form">

				<?php echo do_shortcode( '[contact-form-7 id="93" title="Primary Contact Form" html_id="rq-form" html_class="rq-form"]' ); ?>

			</div>
        </div>
  	</div><!-- site-wrapper-inner -->
</div><!-- site-wrapper -->