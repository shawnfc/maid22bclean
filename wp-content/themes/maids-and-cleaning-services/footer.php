<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
	<!--booking -section-->
	<div class="container-fluid booking-section">
		<div class="container">			
			<div class="col-lg-12 section-headings">				
				<h1>Book a house cleaning in 2 minutes!</h1>			
			</div>			
			<div class="col-lg-4 col-md-4 col-sm-4">			
			</div>			
			<div class="col-lg-4 col-md-4 col-sm-4 appointment-btn text-center">
				<a href="<?php echo esc_url( get_permalink(15) ); ?>">book appointment</a>			
			</div>		
			<div class="col-lg-4 col-md-4 col-sm-4">
			</div>		
		</div>
	</div>	
	
	<div class="container-fluid footer-section">
		<div class="center">
			<div class="col-lg-4 col-md-4 col-sm-4 footer-col1">
				<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo("template_url"); ?>/images/small-logo.png" alt="Logo" /></a>
				<?php dynamic_sidebar('subscribe'); ?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 footer-col2">
				<?php wp_nav_menu(array('menu'=>'Footer Menus')); ?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 footer-col3">
				<ul class="footer-social-icons">
					<li><a href="https://www.facebook.com/maid2bclean" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/@maid2bcleanllc" target="_blank"><i class="fa fa-twitter"></i></a></li>
				</ul>
				<div class="contact-info">
					<div><i class="fa fa-mobile"></i><a href="tel:800-741-3924">800-741-3924</a></div>
					<div><i class="fa fa-envelope"></i><a href="mailto:support@maid2bclean.com">support@maid2bclean.com</a></div>
					<div><i class="fa fa-clock-o"></i>Open daily 8am-5pm</div>
					<div><i class="fa fa-map-marker"></i>1500 Walton Reserve Blvd. Austell, GA 30168</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="container-fluid copyright-section">
		<div class="center">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<p>&copy; 2016 All Rights Reserved. Copyright Maid 2B Clean, LLC.</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 footer-book-now-btn">
				<a href="<?php echo esc_url( get_permalink(15) ); ?>">book service</a>
			</div>
	</div>
	
<?php wp_footer(); ?>
</body>
</html>