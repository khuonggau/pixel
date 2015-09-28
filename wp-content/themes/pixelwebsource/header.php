<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pixelwebsource_Theme
 */

// Custom Fields for Post List, Page, or Single Post
if( is_home() ){
	$main_class	= get_post_meta( get_option( 'page_for_posts' ), 'main_class', true );
}elseif ( is_page() ) {
	$main_class	= get_post_meta( $post->ID, 'main_class', true );
}elseif ( is_single() || is_archive() || is_search() ) {
	$main_class = 'blog';
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap CSS Library -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-3.3.4-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-3.3.4-dist/css/cover.css">
<!-- END Bootstrap CSS Library -->

<!-- FontAwesome Icons -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome/css/font-awesome.min.css">

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>

<!--[if lt IE 9]><script src="../bootstrap-3.3.4-dist/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-3.3.4-dist/js/assets/ie-emulation-modes-warning.js"></script>

<?php wp_head(); ?>

<!-- Import Font -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font/ELEPHNT/stylesheet.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font/great_vibes/stylesheet.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font/pacifico/stylesheet.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font/Raleway-SemiBold/stylesheet.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font/ralewaylight/stylesheet.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font/ralewayregular/stylesheet.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font/ralewaymedium/stylesheet.css">
<?php
// import gear.css for pricing page
if($main_class == "price"){ ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font/sanfrancisco/stylesheet.css">

<?php } ?>

<!--<script src="js/blockScroll.js"></script>-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blockScroll.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animation.css">

<?php 
// import except Home Page
if($post->ID != 9) { ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/about.css">

<?php } ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive-px.css">

<?php
// import gear.css for pricing page
if($main_class == "price"){ ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/gear.css">

<?php } ?>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-62521989-1', 'auto');
	ga('send', 'pageview');
</script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pixelwebsource' ); ?></a>

	<!-- MENU
	===================================================== -->
	<?php
		// $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

		// check page for Post List, Page, or Single Post
		if( is_home() ){
			$thumbnail_url = '';
		}elseif ( is_page() ) {
			$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		}
	?>

	<style>
		.pixel-wrapper {
		    background: url(<?php echo $thumbnail_url; ?>) center center no-repeat;
		    background-size: cover;
		}
	</style>

	<div id="main-wrapper" class="<?php echo $main_class; ?>">
		<section class="pixel-wrapper zero-pixel">
			<a href="" id="px-nav">menu <span class="glyphicon glyphicon-align-justify"></span></a>
		    <a href="" class="px-close-nav glyphicon glyphicon-remove-sign"></a>
		    <a class="mobile-request-a-quote">quote</a>
			<div class="mastnav clearfix top-bgc">
		        <div class="inner">
		          	<a href="<?php echo home_url(); ?>"><p class="masthead-brand"></p></a>

		          	<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class".
					Ref: https://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 
					-->
					<?php
						wp_nav_menu( array(

							'theme_location' 	=> 'primary',
							'container'			=> 'nav',
							'container_class'	=> 'main-nav-wrapper',
							'menu_class'		=> 'nav masthead-nav'
							
						));
					?>

					<div class="clear"></div>
				  	<!-- The ribbon -->
		          	<a class="forkit" data-text="Request a quote" data-text-detached="Drag down >" href=""></a>
		          	<div class="clear"></div>
		        </div><!-- inner -->
		    </div><!-- mastnav -->

			<?php 
				if($main_class == 'px-main'){
					get_template_part('template-parts/content','banner-home');
				}else if($main_class == 'about'){
					get_template_part('template-parts/content','banner-about');
				}else if($main_class == 'design'){
					get_template_part('template-parts/content','banner-design');
				}else if($main_class == 'marketing'){
					get_template_part('template-parts/content','banner-marketing');
				}else if($main_class == 'partnership'){
					get_template_part('template-parts/content','banner-partnership');
				}else if($main_class == 'lastestwork'){
					get_template_part('template-parts/content','lastestwork');
				}else if($main_class == 'price'){
					get_template_part('template-parts/content','pricing');
				}else if($main_class == 'contact'){
					get_template_part('template-parts/content','contact');
				}else if($main_class == 'blog'){
					
				}
			?>
		</section><!-- pixel-wrapper -->