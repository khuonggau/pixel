<?php
/**
 * Description: Banner for Home page
 */

// Advanced Custom Fields
$banner_title_first		= get_field('banner_title_first');
$banner_title_second	= get_field('banner_title_second');
$banner_button			= get_field('banner_button');
$banner_button_url		= get_field('banner_button_url');
?>

<div class="site-wrapper">
  	<div class="site-wrapper-inner">

        <div class="cover-container">
	        <div class="inner cover pending-px">
	        	<!--<p class="lead pending-px mobile-01">Launching May 22nd, 2015</p> -->
	            <p class="cover-heading"><?php echo $banner_title_first; ?></p>
	            <h1 class="lead mobile-02"><?php echo $banner_title_second; ?></h1>
	            <p class="lead mobile-03">
	              	<a href="<?php echo $banner_button_url; ?>" class="btn btn-lg btn-pixel"><?php echo $banner_button; ?></a>
	            </p>
	        </div><!-- inner -->
        </div><!-- cover-container -->

  	</div><!-- site-wrapper-inner -->
</div><!-- site-wrapper -->
<div class="scroll-down"><a href=""></a></div>