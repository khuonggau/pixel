<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pixelwebsource_Theme
 */

?>

<?php wp_footer(); ?>

	<div id="pixel-footer"> 	
    </div><!-- pixel-footer -->
    
    <div class="mastfoot">
        <div class="inner">
        	<a href="http://www.pixelwebsource.com/" class="logo"></a>
        	<div class="field-of-business">
	        	<ul class="ul-01">
	        	  	<li><a href="http://www.pixelwebsource.com/san-jose-web-design/">Web Design</a></li>
	        	  	<li><a href="http://www.pixelwebsource.com/san-jose-internet-marketing/">marketing</a></li>
	        	  	<li><a href="http://www.pixelwebsource.com/web-design-contractors-san-jose/">partnership</a></li>
	        	</ul>
	        	<ul class="ul-02">
	        		<li><a href="http://www.pixelwebsource.com/best-web-designs-in-san-jose/">Latest work</a></li>
	        	  	<li><a href="http://www.pixelwebsource.com/affordable-web-designs-in-san-jose/">Pricing</a></li>
	        	  	<li><a href="http://www.pixelwebsource.com/contact-us/">Contact us</a></li>
	        	</ul>
	        </div><!-- field-of-business -->
	        <nav class="footer-social clearfix">
	          	<a class="sc-tw" target="_blank" href="https://twitter.com/pixelwebsource"></a>
	          	<a class="sc-pin" target="_blank" href="https://www.pinterest.com/pixelwebsource/"></a>
	          	<a class="sc-fb" target="_blank" href="https://www.facebook.com/pixelwebsource"></a>
	          	<a rel="publisher" class="sc-goo" target="_blank" href="https://plus.google.com/+Pixelwebsource"></a>
	          	<a class="sc-linkedin" target="_blank" href="https://www.linkedin.com/company/pixelwebsource   "></a>
	          	<a class="sc-yelp" target="_blank" href="http://www.yelp.com/biz/pixelwebsource-san-jose"></a>
	        </nav><!-- footer-social -->

	        <div class="bd-footer">
	        	<p>Pixelwebsource is a professional web design and web development company in California.<br> 97 S Second St #100,  San Jose CA 95113<a href="mailto:info@pixelwebsource.com"> info@pixelwebsource.com</a> 408 230 5555</p>
				<a class="pp-px" href="http://www.pixelwebsource.com/privacy-policy/">Privacy Policy</a><a href="http://www.pixelwebsource.com/terms-and-conditions/">Terms and Conditions</a>
			</div><!-- bd-footer -->
        </div><!-- inner -->
	</div><!-- mastfoot -->

	<!-- The contents (if there's no contents the ribbon acts as a link) -->
	<div id="request_form" style="top:-100%;">
	    <div class="close-button"><span class="glyphicon glyphicon-remove-sign"></span></div>
	    <div class="form-wrap">
	        <div class="title">Tell Us About <span>Your</span> Project</div>
	        <div lang="en-US" dir="ltr">

	          	<?php echo do_shortcode( '[contact-form-7 id="101" title="Contact Quote" html_id="rq-form" html_class="rq-form"]' ); ?>
	        </div>
	    </div><!-- form-wrap -->
	</div><!-- request_form -->

<script src="<?php bloginfo('template_directory'); ?>/js/forkit.js"></script>
    
<!-- Bootstrap JS Lib-->
<script src="<?php bloginfo('template_directory'); ?>/bootstrap-3.3.4-dist/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bootstrap-3.3.4-dist/js/assets/ie10-viewport-bug-workaround.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.validate.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-validate.bootstrap-tooltip.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/pixelwebsource.js"></script>
<!-- End Bootstrap JS Lib-->
</body>
</html>
