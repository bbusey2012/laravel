
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/twitterBootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/mystyle.css">
    <link rel="stylesheet" href="/login.css">
    <!--Boostrap-->
  </head>
  <body>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">OrganizeMe</a>
		    </div>
		    <div class="navbar-collapse collapse" id="navbar-collapsible">
		    <!--
		      <ul class="nav navbar-nav navbar-left">
		        <li><a href="/home">Home</a></li>
		        <li><a href="#section2">About</a></li>
		        <li><a href="#section3">How</a></li>
		      </ul>
		  -->
		      <ul class="nav navbar-nav navbar-right">
		      	<?php
		      		
		      		//Checks to see if the user is logged in and displays the login and create buttons if they are not
		      		//If the user is logged in, then the logout button is shown
		      		if(!Auth::check())
		      		{
		      			echo "<li><a href='/login'>Login</a></li>";
		      			echo "<li><a href='/create'>Sign-up</a></li>";
		      		}
		      		else
		      		{
		      			echo "<li><a href='/logout'>Logout</a></li>";
		      		}
		      	?>
		      </ul>
		    </div>
		</div>
	 </nav>
	 <br>
	 <br>
	 <br>

      <script src="/jquery-2.1.1.min.js"></script>
      <script src="/twitterBootstrap/dist/js/bootstrap.min.js"></script>
      <script src="/login.js"></script>
  </body>
</html>
