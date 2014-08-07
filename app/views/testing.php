<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/twitterBootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/mystyle.css">
    <link rel="stylesheet" type="text/css" href="/zabuto_calendar.min.css">

  </head>






<body>
	<h3>Due Today</h3>
	<hr>
  	<h4>
  		Example page header
  		<small> Subtext for header</small>
  	</h4>
	        	<?php
	        		date_default_timezone_set('America/New_York');

	        		$date = date('m/d/Y');
	        		print_r($date);



	        	/*
	        		$posts = Post::where('post_class','CSC 241')->paginate(5);
         
                    $today = date('Y-m-d');

					foreach($posts as $post)
					{
						
						$today2 = date_create($today);
						$Post = date_create($post->post_date);
					    $diff = date_diff($today2,$Post);
					
						$postDate = $post->post_date;
						$date = strtotime($postDate);
						$day = date('l',$date);

						if($post->post_date == $today)
						{
					    	echo "<div class='panel panel-primary'>";
								echo "<div class='panel-heading'>";
									print_r($post->post_title);
								echo "</div>";
								echo "<div class='panel-body'>";
									print_r($post->post_body);
								echo "</div>";
								echo "<div class='panel-footer'></div>";
							echo "</div>";
							echo "<br>";	
								
						}

						else
						{
							continue;
						}
						

					echo "<br>";

					echo "<h3>Due tomorrow</h3>";
					echo "<hr>";

						

						if(($diff->days == 1) && ($Post > $today2))
						{
							echo "<div class='panel panel-primary'>";
								echo "<div class='panel-heading'>";
								    print_r($post->post_title);
								echo "</div>";
								echo "<div class='panel-body'>";
									print_r($post->post_body);
								echo "</div>";
								echo "<div class='panel-footer'></div>";
							echo "</div>";
							echo "<br>";
						}

						else
						{
							continue;
						}
						
					

					echo "<br>";

					echo "<h3>Due this week</h3>";
					echo "<hr>";


						if(($post->post_date !== $today) && ($diff->days <= 5) && ($Post != $tomorrow) && ($Post != $yesterday)) 
						{
							echo "For ";
							echo $day;
							echo "<div class='panel panel-primary'>";
								echo "<div class='panel-heading'>";
									print_r($post->post_title);
								echo "</div>";
								echo "<div class='panel-body'>";
									print_r($post->post_body);
								echo "</div>";
									echo "<div class='panel-footer'></div>";
							echo "</div>";
							echo "<br>";
						}

						else
						{
							continue;
						}
						


						echo "<br>";

						echo "<h3>Due in a week or later, so you don't have to really get started on these just yet...</h3>";
						echo "<hr>";

						if(($diff->days) >= 6)
						{
							echo "For ";
							echo $day;
							echo "<div class='panel panel-primary'>";
								echo "<div class='panel-heading'>";
								    print_r($post->post_title);
								echo "</div>";
								echo "<div class='panel-body'>";
									print_r($post->post_body);
								echo "</div>";
								echo "<div class='panel-footer'></div>";
							echo "</div>";
							echo "<br>";
						}

						else
						{
							continue;
						}
						
					}
				*/
				?>




		<script src="/jquery-2.1.1.min.js"></script>
		<script src="/zabuto_calendar.min.js"></script>
    	<script src="/twitterBootstrap/dist/js/bootstrap.min.js"></script>
    	<script src="/myScript.js"></script>
	</body>
</html>