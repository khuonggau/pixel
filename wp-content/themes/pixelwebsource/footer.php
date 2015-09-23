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
	            <form action="" method="POST" class="rq-form" id="rq-form">
	                <div class="input-wrap">
		                <span class="wpcf7-form-control-wrap name">
							<input id="full_name" maxlength="80" name="full_name" size="40" type="text" placeholder="Your Name" required data-parsley-id="2161"><ul class="parsley-errors-list" id="parsley-id-2161"></ul>
						</span>
	                </div><!-- input-wrap -->
	                <div class="input-wrap odd">
		                <span class="wpcf7-form-control-wrap phone">
							<input id="phone" maxlength="40" name="phone" size="40" type="text" placeholder="Phone Number" required data-parsley-typersley-id="7200"><ul class="parsley-errors-list" id="parsley-id-7200"></ul>
						</span>
	                </div><!-- input-wrap -->
	                <div class="input-wrap">
		                <span class="wpcf7-form-control-wrap email">
							<input id="email" name="email" value="" size="40" type="text" placeholder="Email Address" required data-parsley-type="email" data-parsley-id="0798"><ul class="parsley-errors-list" id="parsley-id-0798"></ul>
						</span>
	                </div><!-- input-wrap -->
	                <div class="input-wrap odd">
		                <span class="wpcf7-form-control-wrap country">
							<input id="company" maxlength="40" name="company" size="20" type="text" placeholder="Company" required data-parsley-id="3385"><ul class="parsley-errors-list" id="parsley-id-3385"></ul>
						</span>
	                </div><!-- input-wrap -->
	                <div class="textarea-wrap">
		                <span class="wpcf7-form-control-wrap comment">
						<textarea name="description" cols="40" rows="10" id="description" placeholder="Project Brief" required data-parsley-id="6757"></textarea><ul class="parsley-errors-list" id="parsley-id-6757"></ul>
						</span>
	                </div><!-- textarea-wrap -->
	                <div class="submit-wrap">
	                    <input type="submit" name="submit" id="quote-submit" value="Send">
	                </div><!-- submit-wrap -->
	            </form>
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
