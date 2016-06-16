<?php

	/*Template Name:Book Now Template*/

get_header(); ?>
<div class="container-fluid book-now-page">
<div class="overlay-book"></div>
	<div class="container">
		<div class="col-lg-12">
			<div class="book-heading-center"><h1>You're only 2 minutes away from the best cleaning experience ever!</h1></div>
		</div>

		<div class="col-lg-12 book-now-page-lower">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 one-fifth">
				<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
				<p>7 Days a week</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 one-fifth">
				<i class="fa fa-clock-o" aria-hidden="true"></i>
				<p>Book in 2 minutes</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 one-fifth">
				<i class="fa fa-cc-visa" aria-hidden="true"></i>
				<p>Secure Online Payment</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 one-fifth">
				<i class="fa fa-file-excel-o" aria-hidden="true"></i>
				<p>Cancel Anytime</p>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid booking-page">
	<div class="container">
		<iframe id="booking-widget-iframe" src="https://maid2bclean.launch27.com/?w_cleaning" style="border:none;width:100%;min-height:2150px;overflow:hidden" scrolling="no"></iframe>
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