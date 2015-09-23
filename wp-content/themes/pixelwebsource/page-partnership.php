<?php
/**
 * Template Name: Partnership Page
 */

// Advanced Custom Fields
$content_section_1	= get_field('content_section_1');
$content_section_2	= get_field('content_section_2');

get_header();
?>

	<section class="cover-px pixel-01">
        <div class="site-wrapper">
        	<div class="site-wrapper-inner not-top">
				<div class="col-sm-6 col-md-6 col-lg-6 site-left">
					
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6 col-lg-offset-0 site-right">
					<?php echo $content_section_1; ?>
				</div>
        	</div><!-- site-wrapper-inner -->
	    </div><!-- site-wrapper -->
    </section><!-- cover-container -->

    <section class="cover-px pixel-02">
        <div class="site-wrapper">
        	<div class="site-wrapper-inner not-top">
				<div class="col-sm-6 col-md-6 col-lg-6 site-left">
					<?php echo $content_section_2; ?>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6 col-lg-offset-0 site-right">
					
				</div>
        	</div><!-- site-wrapper-inner -->
	    </div><!-- site-wrapper -->
    </section><!-- cover-container -->
</div><!-- main-wrapper -->
<!--
<div class="bullet-wrapper">
	<ul>
		<li><span></span></li>
	</ul>
</div>
-->
<!-- bullet-wrapper -->

<?php get_footer(); ?>