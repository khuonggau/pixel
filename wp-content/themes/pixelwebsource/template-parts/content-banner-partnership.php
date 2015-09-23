<?php
/**
 * Description: Banner for Marketing page
 */

// Advanced Custom Fields
$banner_title_first		= get_field('banner_title_first');
$banner_title_second	= get_field('banner_title_second');
?>
<div class="site-wrapper">
  	<div class="site-wrapper-inner">
        <div class="cover-container">
	        <div class="inner cover">
	            <h2 class="cover-heading"><?php echo $banner_title_first; ?></h2>
	            <h1>
	            	<?php echo $banner_title_second; ?>
	            </h1>
	        </div>
        </div><!-- cover-container -->
  	</div><!-- site-wrapper-inner -->
</div><!-- site-wrapper -->