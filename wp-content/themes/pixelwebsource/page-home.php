<?php
/**
 * Template Name: Home Page
 */

// Advanced Custom Fields
$first_title_1			= get_field('first_title_1');
$first_title_2			= get_field('first_title_2');
$first_feature_image	= get_field('first_feature_image');

$second_title_1			= get_field('second_title_1');
$second_title_2			= get_field('second_title_2');
$second_feature_image	= get_field('second_feature_image');

$third_title_1			= get_field('third_title_1');
$third_title_2			= get_field('third_title_2');
$third_feature_image	= get_field('third_feature_image');

get_header();
?>

		<section class="cover-px pixel-01">
	        <div class="site-wrapper">
	        	<div class="site-wrapper-inner not-top">

	        		<div class="cover-container">
	        			<div class="inner cover">
	        			    <p class="up"><?php echo $first_title_1; ?></p>
	        			    <p class="down"><?php echo $first_title_2; ?></p>
	        			    <div class="animated">

	        			    	<!-- If user uploaded an image -->
								<?php if( !empty($first_feature_image) ) : ?>
									<img src="<?php echo $first_feature_image['url']; ?>" alt="<?php echo $first_feature_image['alt']; ?>">
								<?php endif; ?>

	        			    </div><!-- animated -->
	        			</div><!-- inner -->
	        		</div><!-- cover-container -->

	        	</div><!-- site-wrapper-inner -->
		    </div><!-- site-wrapper -->
        </section><!-- cover-px -->

        <section class="cover-px pixel-02">
	        <div class="site-wrapper">
	        	<div class="site-wrapper-inner not-top">

	        		<div class="cover-container">
	        			<div class="inner cover">
	        			    <p class="up"><?php echo $second_title_1; ?></p>
	        			    <p class="down"><?php echo $second_title_2; ?></p>
	        			    <div class="animated">

	        			    	<!-- If user uploaded an image -->
								<?php if( !empty($second_feature_image) ) : ?>
									<img src="<?php echo $second_feature_image['url']; ?>" alt="<?php echo $second_feature_image['alt']; ?>">
								<?php endif; ?>

	        			    </div><!-- animated -->
	        			</div><!-- inner -->
	        		</div><!-- cover-container -->

	        	</div><!-- site-wrapper-inner -->
		    </div><!-- site-wrapper -->
        </section><!-- cover-px -->

        <section class="cover-px pixel-03">
	        <div class="site-wrapper">
	        	<div class="site-wrapper-inner">

	        		<div class="cover-container">
	        			<div class="inner cover">
	        			    <p class="up"><?php echo $third_title_1; ?></p>
	        			    <p class="down"><?php echo $third_title_2; ?></p>
	        			    <div class="animated">

	        			    	<!-- If user uploaded an image -->
								<?php if( !empty($third_feature_image) ) : ?>
									<img src="<?php echo $third_feature_image['url']; ?>" alt="<?php echo $third_feature_image['alt']; ?>">
								<?php endif; ?>

	        			    </div><!-- animated -->
	        			</div><!-- inner -->
	        		</div><!-- cover-container -->

	        	</div><!-- site-wrapper-inner -->
		    </div><!-- site-wrapper -->
        </section><!-- cover-px -->
	</div><!-- main-wrapper -->

    <div class="bullet-wrapper">
    	<ul>
    		<li><span></span></li>
    		<li><span></span></li>
    		<li><span></span></li>
    		<li><span></span></li>
    	</ul>
    </div><!-- bullet-wrapper -->

<?php get_footer(); ?>