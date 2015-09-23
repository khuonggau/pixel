<?php
/**
 * Template Name: Marketing Page
 */

// Advanced Custom Fields
$content_section_1	= get_field('content_section_1');
$content_section_2	= get_field('content_section_2');
$content_section_3	= get_field('content_section_3');
$content_section_4a	= get_field('content_section_4a');
$content_section_4b	= get_field('content_section_4b');

get_header();
?>

	<section class="cover-px pixel-01">
        <div class="site-wrapper">
        	<div class="site-wrapper-inner not-top">
				<div class="cover-middle">
					<?php echo $content_section_1; ?>
				</div>
        	</div><!-- site-wrapper-inner -->
	    </div><!-- site-wrapper -->
    </section><!-- cover-container -->

	<section class="cover-px pixel-02">
        <div class="site-wrapper">
        	<div class="site-wrapper-inner not-top">
				<div class="col-sm-7 col-md-7 col-lg-6 site-left">
					<?php echo $content_section_2; ?>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-6 col-lg-offset-0 site-right">
					
				</div>
        	</div><!-- site-wrapper-inner -->
	    </div><!-- site-wrapper -->
    </section><!-- cover-container -->

    <section class="cover-px pixel-03">
        <div class="site-wrapper">
        	<div class="site-wrapper-inner not-top">
				<div class="col-sm-5 col-md-5 col-lg-6 site-left">
					
				</div>
				<div class="col-sm-7 col-md-7 col-lg-6 col-lg-offset-0 site-right">
					<?php echo $content_section_3; ?>
				</div>
        	</div><!-- site-wrapper-inner -->
	    </div><!-- site-wrapper -->
    </section><!-- cover-container -->
    <section class="cover-px pixel-04">
        <div class="site-wrapper">
        	<div class="site-wrapper-inner not-top">
				<div class="col-sm-6 col-md-6 col-lg-6 site-left">
					<?php echo $content_section_4a; ?>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6 col-lg-offset-0 site-right">
					
				</div>
				<div class="clear"></div>
				<div class="cover-middle">
					<?php echo $content_section_4b; ?>
				</div>
        	</div><!-- site-wrapper-inner -->
	    </div><!-- site-wrapper -->
    </section><!-- cover-container -->
</div><!-- main-wrapper -->
<!--<div class="bullet-wrapper">
	<ul>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
	</ul>
</div><!-- bullet-wrapper -->

<?php get_footer(); ?>