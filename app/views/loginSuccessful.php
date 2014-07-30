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
		  	<div class="alert alert-success" role="alert">Congratulations, you have successfully logged in!</div>
		</section>

		
		<div id="footer">
			<?php include('includes/footer.php'); ?>
		</div>

		<script src="/jquery-2.1.1.min.js"></script>
    	<script src="/twitterBootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>

