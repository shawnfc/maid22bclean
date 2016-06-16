<?php

	/*Template Name: Business Cleaning Template*/

get_header(); ?>

	<div class="container-fluid business-cleaning-banner">
	<div class="overlay-faq"></div>
		<div class="container">
			<div class="col-lg-12 section-headings">
				<h1>Janitorial Cleaning <br> for Businesses</h1>
			</div>
		</div>
	</div>
	
	<div class="container-fluid business-cleaning-page">
		<div class="container">
			<div class="col-lg-12 section-headings">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="row business-cleaning-page-row">
				<div class="col-lg-12">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 business-cleaning-lt">
						<div class="business-cleaning-lt-inner">
							<h3 class="color-gray">Request a Commercial Quote</h3>
							<?php //echo do_shortcode('[contact-form-7 id="118" title="business cleaning"]'); ?>
							<iframe id="booking-widget-iframe" src="https://maid2bclean.launch27.com/quotes/new?w" style="border:none;width:100%;overflow:hidden" scrolling="no"></iframe>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 business-cleaning-rt">
						<div class="business-cleaning-rt-inner">
							<h4>The Type of Offices We Typically Serve</h4>
						</div>
						<div class="icon_box02">
							<img src="<?php bloginfo("template_url"); ?>/business-images/pulse.png" alt="Health Care">
							<h4>Healthcare facilities</h4>
						</div>
						<div class="icon_box02">
							<img src="<?php bloginfo("template_url"); ?>/business-images/familiar-insurance-symbol.png" alt="Day Care">
							<h4>Day Care facilities</h4>
						</div>
						<div class="icon_box02">
							<img src="<?php bloginfo("template_url"); ?>/business-images/office-building.png" alt="General Office">
							<h4>General Office Buildings</h4>
						</div>
						<div class="icon_box02">
							<img src="<?php bloginfo("template_url"); ?>/business-images/high-school.png" alt="General Office">
							<h4>Schools</h4>
						</div>
						<div class="icon_box02">
							<img src="<?php bloginfo("template_url"); ?>/business-images/store.png" alt="General Office">
							<h4>Retail and shopping plaza’s</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
<?php get_footer(); ?>