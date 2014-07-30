<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My first bootstrap template</title>

    <link rel="stylesheet" type="text/css" href="/twitterBootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/mystyle.css">

  </head>

	<body>
		<div id="nav-bar">
			<?php include('includes/nav.php'); ?>
		</div>

		<section class="container-fluid" id="section1">
		  	<h1 class="text-center v-center">Sectionalize</h1>
		  	<div class="row">
		    	<div class="col-sm-4">
		          <div class="row">
		          	<div class="col-sm-10 col-sm-offset-2 text-center"><h3>Robust</h3><p>There is other content and snippets of details or features that can be placed here..</p><i class="fa fa-cog fa-5x"></i></div>
		          </div>
		    	</div>
		        <div class="col-sm-4 text-center">
		          <div class="row">
		          	<div class="col-sm-10 col-sm-offset-1 text-center"><h3>Simple</h3><p>You may also want to create content that compells users to scroll down more..</p><i class="fa fa-user fa-5x"></i></div>
		          </div>
		    	</div>
		        <div class="col-sm-4 text-center">
		          <div class="row">
		          	<div class="col-sm-10 text-center"><h3>Clean</h3><p>In the first 30 seconds of a user's visit to your site they decide if they're going to stay..</p><i class="fa fa-mobile fa-5x"></i></div>
		          </div>
		    	</div>
		  	</div>
		</section>

		<section class="container-fluid" id="section2">
		  <div class="row" id="section2-row">
		  	<div class="col-sm-8 col-sm-offset-2 text-center" id="section2-text">
		        <h1>What is Bootstrap?</h1>
		        <br>
				<p class="lead">Bootstrap is a free collection of tools for creating websites and web applications. It contains HTML and CSS-based design templates for typography, forms, buttons, navigation and other interface components, as well as optional JavaScript extensions. It is the No.1 project on GitHub with 65,000+ stars and 23,800 forks (as of March 2014) [1] and has been used by NASA and MSNBC, among many others..</p>
		        <br> 
		      	<i style="font-size:120px" class="fa fa-camera fa-5x"></i>
		    </div>
		  </div>
		</section>

		<section class="container-fluid" id="section3">
			<h1 class="text-center">Bootstrap is Responsive</h1>
		    <div class="row">
		      <div class="col-sm-6 col-sm-offset-3">
		        <p class="text-center lead">Vertical scrolling has become a popular and lasting trend in Web design. The question becomes, is it here to stay?</p>
		        <div class="row">
		          <div class="col-xs-6">Some brand-tacular designs even have home page content that is taller that 12,000 pixels. That's a lotta content.</div>
		          <div class="col-xs-6 text-right">Anyhoo, this is just some random blurb of text, and Bootply.com is a playground and code editor for Bootstrap.</div>
		        </div>
		      </div>
		   </div>
		</section>

		<div id="footer">
			<?php include('includes/footer.php'); ?>
		</div>

		<script src="/jquery-2.1.1.min.js"></script>
    	<script src="/twitterBootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>

