<?php

	/*Template Name: Full Width Banner Template*/

get_header(); ?>

	<div class="container-fluid full-width-banner-template">
	<div class="overlay-faq"></div>
		<div class="container">
			<div class="col-lg-12 section-headings">
				<h1>how can we help?</h1>
			</div>
		</div>
	</div>
	
	<div class="container-fluid full-width-page-template">
		<div class="container">
			<div class="col-lg-12 section-headings">
				<h1>frequently asked questions</h1>
			</div>
		
			<?php while ( have_posts() ) : the_post(); ?> 
			<div class="col-lg-12 section-content">
				<?php the_content(); ?>
			</div>
			 <?php
    endwhile; 
    wp_reset_query(); 
    ?>
		</div>
	</div>
<?php get_footer(); ?>