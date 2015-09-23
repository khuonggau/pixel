<?php
/**
 * Template Name: Pricing Page
 */

get_header();
?>

	<section class="cover-px pixel-01">
       	<div class="site-wrapper cover-px">
	      	<div class="site-wrapper-inner">
	
		        <div class="cover-container">
			        <div class="inner cover">

						<?php $loop = new WP_Query( array( 'post_type' => 'pricing', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php
						// featured image of Prices Post
						$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
						?>

						<div class="item-price">
			        		<h2><?php the_title(); ?></h2>
			        		<div class="title <?php the_field('background_class'); ?>" style="background-image: url(<?php echo $thumbnail_url; ?>);">
			        			<div class="title-price-wrapper">
			        				<p class="smaller">starting at</p>
			        				<?php the_field('starting_price'); ?>
			        			</div>
			        		</div>

							<?php
							$field = get_field_object('price_icon');
							$value = $field['value'];
							$choices = $field['choices'];

							if( $value ) : ?>
							<ul>
								<?php foreach( $value as $v ) : ?>
								<li class="<?php echo $v; ?>">
									<?php echo $choices[ $v ]; ?>
								</li>
								<?php endforeach; ?>
							</ul>
							<?php endif; ?>

			        		<div class="wrapper-btn">
			        			<a href="" class="btn request-a-quote-price">Request a Quote</a>
			        		</div>
			        	</div>

						<?php endwhile; wp_reset_query(); ?>

			            <div class="clear"></div>
			        </div>
		        </div><!-- cover-container -->

	      	</div><!-- site-wrapper-inner -->
	    </div><!-- site-wrapper -->
    </section><!-- cover-container -->
</div><!-- main-wrapper -->
<!--
<div class="bullet-wrapper">
	<ul>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
	</ul>
</div>
-->
<!-- bullet-wrapper -->

<?php get_footer(); ?>