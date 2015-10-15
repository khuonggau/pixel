<?php
/**
 * Description: Banner for Marketing page
 */

// Advanced Custom Fields
$banner_title_first		= get_field('banner_title_first');
$banner_title_second	= get_field('banner_title_second');
$banner_button			= get_field('banner_button');
$banner_button_url		= get_field('banner_button_url');
?>
<div class="site-wrapper">
  	<div class="site-wrapper-inner">
        <div class="col-sm-6 col-md-5 col-lg-6 site-left">
			<h2><?php echo $banner_title_first; ?></h2>
			<h1>
				<?php echo $banner_title_second; ?>
			</h1>
			<p class="lead">
              <a href="<?php echo get_site_url() .'/'. $banner_button_url; ?>" class="btn btn-lg btn-pixel"><?php echo $banner_button; ?></a>
            </p>
		</div>
		<div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0 site-right">
			
		</div>
  	</div><!-- site-wrapper-inner -->
</div><!-- site-wrapper -->
<div class="scroll-down"><a href=""></a></div>