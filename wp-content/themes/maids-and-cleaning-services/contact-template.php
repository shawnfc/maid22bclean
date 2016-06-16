<?php

	/*Template Name: Contact Template*/

get_header(); ?>

	<div class="container-fluid contact-page-template">
		<div class="overlay-home"></div>
		<div class="container">
			<div class="col-lg-12 contact-page-heading text-center">
				<div class="heading-of-banner">
					<h1>Questions?<br>We'll Answer Them.</h1>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid contact-page-middle">
		<div class="container">
			<div class="col-lg-12 contact-page-middle-title text-center">
				<div class="heading-center">
					<p>If you couldn't find your answer in our <span><a href="<?php echo esc_url( get_permalink(8) ); ?>" class="green">FAQs</a></span>, here's a few ways to reach out to us.</p>
				</div>
			</div>
		
			<div class="full-100">
				<div class="small-container">
					<div class="col-lg-12 method">	
						<table>
							<tr>
								<td class="td-left"><span>1</span></td>
								<td class="td-right">
									<h2>Send an email to our Customer Satisfaction Team!</h2>
								</td>
							</tr>
						</table>
						<?php echo do_shortcode ('[contact-form-7 id="75" title="contact us page"]'); ?>
					</div>
					<div class="col-lg-12 method">	
						<table>
							<tr>
								<td class="td-left"><span>2</span></td>
								<td class="td-right">
									<h2>Get quick replies on Twitter: <a href="https://twitter.com/@maid2bcleanllc">@maid2bcleanllc</a></h2>
								</td>
							</tr>
						</table>
					</div>
					<div class="col-lg-12 method">	
						<table>
							<tr>
								<td class="td-left"><span>3</span></td>
								<td class="td-right">
									<h2>Email us at <a href="mailto:support@maid2bclean.com">support@maid2bclean.com</a></h2>
								</td>
							</tr>
						</table>
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
<?php get_footer(); ?>