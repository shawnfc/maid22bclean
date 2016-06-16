<?php
	/*Template Name: Full Width Template*/
get_header(); ?>
	<div class="container-fluid full-width-page-template">
		<div class="container">
			<div class="col-lg-12 section-headings">
				<h1><?php the_title(); ?></h1>
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