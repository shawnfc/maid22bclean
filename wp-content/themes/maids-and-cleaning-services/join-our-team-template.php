<?php 
/* Template Name: Join our team template */
get_header();
?>
<div class="container-fluid our-team-container join-our-team-wrapper">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="overlay-container">
		<div class="join-team-inner">
			<div class="overlay-upper-section">                               
                <h2>Apply to Be a Maid 2B Clean Cleaner.</h2>
				<ul>
					<li>Set your schedule and area.</li>
					<li>Build a client base.</li>
					<li>Have full support from the Maid 2B Clean team.</li>
				</ul>
            </div>
			<div class="overlay-lower-section"> 
				<?php  echo do_shortcode('[contact-form-7 id="76" title="Join our team contact page"]'); ?>
			</div>
		</div>
		</div>
		</div>
	</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78616889-1', 'auto');
  ga('send', 'pageview');

</script>
<?php 
get_footer();
?>