<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Maid 2b Clean is a meticulously detailed professional Cleaning Service for Homes and Businesses in the Atlanta Georgia area and surrounding suburbs. Book online now!">
<meta name="keywords" content="home cleaning, commercial cleaning, house cleaning, maid services, clean house, house cleaning quotes, house maid, home clean up, cleaning company, business cleaning">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://maid2bclean.launch27.com/jsbundle"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/bootstrap.min.css">
	<?php wp_head(); ?>
	<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5728a510dcc35f4931641c16/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script src="https://www.groovejar.com/gj.js" data-groovejar-token="-v3UrjN2JZ8" async="async"></script>
</head>

<body <?php body_class(); ?>>
	<div class="container-fluid header-section">
		<div class="center">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 header-left logo">
				<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo("template_url"); ?>/images/small-logo.png" alt="Logo" /></a>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 header-right large-screen-menus">
				<?php wp_nav_menu(array('menu'=>'Header Menus')); ?>
			</div>
			<!--mobile navigation start-->
			<div class="col-xs-12 mobile-menus">
				<nav class="navbar navbar-default">
					<div>
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo("template_url"); ?>/images/small-logo.png" alt="Logo" /></a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<?php wp_nav_menu(array('menu'=>'Header Menus')); ?>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>