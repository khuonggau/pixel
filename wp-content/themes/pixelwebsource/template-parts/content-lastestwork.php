<?php
/**
 * Description: Content for Latest Work page
 */
?>
<div class="site-wrapper">
    <div id="works-wrap">
    	<div id="works">
    		<h1 class="cover-heading">Our Latest Work</h1>

    		<ul class="grid">

				<?php $loop = new WP_Query(array('post_type' => 'latest_work', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
				
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

				<li class="grid-item">
    				<article>
            			<header>
            				<p class="title"><?php the_title(); ?></p>
            			</header>
            			<div class="wrapper-img">
            				<a href="">
								<?php

								// check for featured image
								if( has_post_thumbnail ){
                                    $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                    // $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), large );
                                    $thumbnail_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);

									echo '<img src="'.$thumbnail_url.'" alt="'.$thumbnail_alt.'">';
								}
                                
								?>
							</a>
            			</div>
            			<footer>
                            <?php if (get_field('button_text') == "visit website") { ?>
            				<a href="<?php the_field('button_url'); ?>"><?php the_field('button_text'); ?></a>
                            <?php }else{ ?>
                            <a style="color:#666;background:none;display:inline-block;"><?php the_field('button_text'); ?></a>
                            <?php } ?>
            				<div class="copyright">
            					<a href="http://www.pixelwebsource.com/"></a>
            					<p>designed by pixelwebsource</p>
            					<div class="clear"></div>
            				</div>
            			</footer>
            		</article>
            	</li>

				<?php endwhile; wp_reset_query(); ?>
    		</ul>
    		<div class="clear"></div>
		</div>
    </div>
</div><!-- site-wrapper -->