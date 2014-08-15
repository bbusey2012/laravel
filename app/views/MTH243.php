<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/twitterBootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/mystyle.css">

  </head>

	<body>
		<div id="nav-bar">
			<?php include('includes/nav.php');?>
		</div>
	
		<div class="container-fluid">

      	<br>
        <div class="row row-offcanvas row-offcanvas-left">
        
	         <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
	            <ul class="nav nav-sidebar">
	              <li><a href="/home">Dashboard</a></li>
	              <li><a href="/CSC211">CSC 211</a></li>
	              <li><a href="/CSC241">CSC 241</a></li>
	              <li><a href="/MTH121">MTH 121</a></li>
	              <li><a href="/MTH243">MTH 243</a></li>
	              <li><a href="/1834Soft">1834 Software</a></li>
	              <li><a href="/Exams">Exams</a></li>
	            </ul>
	            
	            <!--Adding a new assignment-->
				<a href="#post-modal" class="btn btn-default btn-success" data-toggle="modal"><span class="glyphicon glyphicon-plus-sign"></span> New Post</a>

				<br>
				<br>
				
				<!--Adding a new exam-->
		    	<a href="#exam-modal" class="btn btn-default btn-success" data-toggle="modal"><span class="glyphicon glyphicon-plus-sign"></span> New Exam</a>
	         </div>

	         <div id="post-modal" class="modal fade">
			        <div class="modal-dialog">
			          <div class="modal-content">
			            <div class="modal-header">
			              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>       
			              <h4 class="modal-title">New Post</h4>
			            </div>
			           
			           <form id='post-form' action="/add_post" method='post' class="form-horizontal"> 
				           <div class="modal-body">
				           	  <label for="title">Title</label>
				           	  <input name="title" type="text" class="form-control">
				           	  <br>

				           	  <br>
				           	  <label for="date">Due date</label>
				           	  <input name="date" type="text" class="form-control" placeholder="Dates must be typed like: yyyy-mm-dd">
				           	  <br>
				           	  <label for="class">Class</label>
				           	  <input name="class" type="text" class="form-control">
				           	  <br>

				           	  <br>
				           	  <label for="content">Content</label>
				              <textarea name="content" class="form-control" rows="7"></textarea>
				              <br>

				           </div>
					       <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					          <button type="submit" id='post-submit-button' class="btn btn-primary">Post</button>
					       </div>
					    </form>
			        </div><!-- /.modal-content -->
			      </div><!-- /.modal-dialog -->
		    	</div>

	         
		    	<div id="exam-modal" class="modal fade">
			        <div class="modal-dialog">
			          <div class="modal-content">
			            <div class="modal-header">
			              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>       
			              <h4 class="modal-title">New Exam</h4>
			            </div>
			           
			           <form id='exam-form' action="/add_exam" method='post' class="form-horizontal"> 
				           <div class="modal-body">
				           	  <label for="title">Title</label>
				           	  <input name="title" type="text" class="form-control">
				           	  <br>

				           	  <label for="date">Exam date</label>
				           	  <input name="date" type="text" class="form-control" placeholder="Dates must be typed like: yyyy-mm-dd">
				           	  <br>

				           	  <label for="class">Class</label>
				           	  <input name="class" type="text" class="form-control">
				           	  <br>

				           	  <label for"content">Description</label>
				           	  <textarea name="content" class="form-control" rows="7"></textarea>
				              <br>

				           </div>
					       <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					          <button type="submit" id='post-submit-button' class="btn btn-primary">Post</button>
					       </div>
					    </form>
			        </div><!-- /.modal-content -->
			      </div><!-- /.modal-dialog -->
		    	</div>
            
           

        
        <div class="col-sm-9 col-md-10 main">
			<h2 class="text-center">
	           Codes and Cryptology
	        </h2>

	        <h3>Due Today</h3>
	        <hr>
	        	<?php
	        		date_default_timezone_set('America/New_York');

	        		//Accesses the table columns CSC 211 in both the posts and exams table
	        		$posts = Post::where('post_class','MTH 241')->get();
         			$exams = Exam::where('exam_class','MTH 241')->get();

                    $today = date('Y-m-d');

					foreach($posts as $post)
					{
						//If date of post is the same as toaday
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

						//If not, continue looking through posts
						else
						{
							continue;
						}
						
					}

					foreach($exams as $exam)
					{
						//If date of exam being looked at is the same as today's date
						if($exam->exam_date == $today)
						{
							echo "<div class='panel panel-danger'>";
								echo "<div class='panel-heading'>";
									print_r($exam->exam_title);
								echo "</div>";
								echo "<div class='panel-body'>";
									print_r($exam->exam_content);
								echo "</div>";
								echo "<div class='panel-footer'></div>";
							echo "</div>";
							echo "<br>";
						}

						//If not, keep looking through exams table
						else
						{
							continue;
						}
					}
				?>

			<br>

			<h3>Due tomorrow</h3>
			<hr>
				<?php

					//Accesses both the column CSC 211 in both the posts and exams databse table
					$posts = Post::where('post_class','MTH 243')->get();
					$exams = Exam::where('exam_class','MTH 243')->get();

					$today = date('Y-m-d');

					foreach($posts as $post)
					{
						//Makes today's date and the date of the post that is being looked at
						//from the database table into date objects so that the difference between 
						//the two can be calculated
						$today2 = date_create($today);
						$Post = date_create($post->post_date);
					    $diff=date_diff($today2,$Post);
					
						//Stores the day of the post so that we can use it later
						$postDate = $post->post_date;
						$date = strtotime($postDate);
						$day = date('l',$date);

						//If the difference between the current date and the post date
						//is 1 and the post date is 1 day ahead of the current date
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

						//If not, keeping looking through posts in database table
						else
						{
							continue;
						}
						
					}

					foreach($exams as $exam)
					{
						///Makes today's date and the date of the exam that is being looked at
						//from the database table into date objects so that the difference between 
						//the two can be calculated
						$today2 = date_create($today);
						$examDate = date_create($exam->exam_date);
					    $diff = date_diff($today2,$examDate);

					 
						//Stores the day of the exam so that we can use it later
						$ExamDate = $exam->exam_date;
						$date = strtotime($ExamDate);
						$day = date('m/d',$date);
						$dayOfWeek = date('l',$date);


						//If the difference between the current date and the exam date
						//is 1 and the post date is 1 day ahead of the current date
						if(($diff->days == 1) && ($examDate > $today2)) 
						{
							echo "<h4>$dayOfWeek $day</h4>";
							echo "<div class='panel panel-danger'>";
								echo "<div class='panel-heading'>";
									print_r($exam->exam_title);
								echo "</div>";
								echo "<div class='panel-body'>";
									print_r($exam->exam_content);
								echo "</div>";
									echo "<div class='panel-footer'></div>";
							echo "</div>";
							echo "<br>";
						}

						//Continue looking through exam database table
						else
						{
							continue;
						}
						
					}
				?>

			<br>

			<h3>Due in the next 5 days</h3>
			<hr>
				<?php

					//Accesses both the column CSC 211 in both the posts and exams databse table
					$posts = Post::where('post_class','MTH 243')->get();
					$exams = Exam::where('exam_class','MTH 243')->get();
					$today = date('Y-m-d');

					foreach($posts as $post)
					{
						//Makes today's date and the date of the post that is being looked at
						//from the database table into date objects so that the difference between 
						//the two can be calculated
						$today2 = date_create($today);
						$Post = date_create($post->post_date);
					    	$diff=date_diff($today2,$Post);

					    //Get and store tomorrow's and yesterday's date to be used later
					    $tomorrow = new DateTime("tomorrow");
					    $yesterday = new DateTime("yesterday");
					
						//Stores the day of the post so that we can use it later
						$postDate = $post->post_date;
						$date = strtotime($postDate);
						$day = date('l',$date);
						$dayOfWeek = date('m/d',$date);

						//If the date of the post is not today, is within the next 5 days, is not tomorrow, and is not yesterday
						if(($post->post_date !== $today) && (($diff->days <= 5) && !($today2 > $Post)) && ($Post != $tomorrow) && ($Post != $yesterday)) 
						{
							echo "<h4>$day $dayOfWeek</h4>";
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

						//Continue looking through posts database table
						else
						{
							continue;
						}
						
					}

					foreach($exams as $exam)
					{
						///Makes today's date and the date of the exam that is being looked at
						//from the database table into date objects so that the difference between 
						//the two can be calculated
						$today2 = date_create($today);
						$examDate = date_create($exam->exam_date);
					    	$diff = date_diff($today2,$examDate);

					    //Get and store tomorrow's and yesterday's date to be used later
					    $tomorrow = new DateTime("tomorrow");
					    $yesterday = new DateTime("yesterday");

					 
						//Stores the day of the exam so that we can use it later
						$ExamDate = $exam->exam_date;
						$date = strtotime($ExamDate);
						$day = date('m/d',$date);
						$dayOfWeek = date('l',$date);

						//If the date of the exam is not today, is within the next 5 days, is not tomorrow, and is not yesterday
						if(($exam->exam_date !== $today) && ($diff->days <= 5) && ($examDate != $tomorrow) && ($examDate != $yesterday) && !($today2 > $examDate))  
						{
							echo "<h4>$dayOfWeek $day</h4>";
							echo "<div class='panel panel-danger'>";
								echo "<div class='panel-heading'>";
									print_r($exam->exam_title);
								echo "</div>";
								echo "<div class='panel-body'>";
									print_r($exam->exam_content);
								echo "</div>";
									echo "<div class='panel-footer'></div>";
							echo "</div>";
							echo "<br>";
						}

						//Continue looking through exam table
						else
						{
							continue;
						}
						
					}
				?>


			<br>

			<h3>Due in a week or later, so you don't have to really get started on these just yet...</h3>
			<hr>
				<?php

					//Accesses the column 'CSC 211' in the exam and post database table
					$posts = Post::where('post_class','MTH 243')->get();
					$exams = Exam::where('exam_class','MTH 243')->get();
					$today = date('Y-m-d');

					foreach($posts as $post)
					{
						//Makes today's date and the date of the post that is being looked at
						//from the database table into date objects so that the difference between 
						//the two can be calculated
						$today2 = date_create($today);
						$Post = date_create($post->post_date);
					    	$diff=date_diff($today2,$Post);
					
						//Stores the day of the post so that we can use it later
						$postDate = $post->post_date;
						$date = strtotime($postDate);
						$day = date('m/d',$date);
						$dayOfWeek = date('l',$date);

						//If the difference between the post date and today's date is 6 days or more
						if(($diff->days >= 6) && !($diff->days < 0) && ($post->post_date > $today))
						{
							echo "<h4>$dayOfWeek $day</h4>";
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

						//If the post date has passed (a.ka. is behind the current date) continue to look through posts in database table
						if($diff->days< 0 || $post->post_date < $today)
						{
							continue;
						}
						
					}

					foreach($exams as $exam)
					{
						///Makes today's date and the date of the exam that is being looked at
						//from the database table into date objects so that the difference between 
						//the two can be calculated
						$today2 = date_create($today);
						$examDate = date_create($exam->exam_date);
					    $diff = date_diff($today2,$examDate);

					 
						//Stores the day of the exam so that we can use it later
						$ExamDate = $exam->exam_date;
						$date = strtotime($ExamDate);
						$day = date('m/d',$date);
						$dayOfWeek = date('l',$date);

						//If the difference between the post date and today's date is 6 days or more
						if(($diff->days) >= 6  && !($diff->days < 0) && ($exam->exam_date > $today))
						{
							echo "<h4>$dayOfWeek $day</h4>";
							echo "<div class='panel panel-danger'>";
								echo "<div class='panel-heading'>";
								    print_r($exam->exam_title);
								echo "</div>";
								echo "<div class='panel-body'>";
									print_r($exam->exam_content);
								echo "</div>";
								echo "<div class='panel-footer'></div>";
							echo "</div>";
							echo "<br>";
						}

						//Once the we get to point where all the exam dates are behind the current date,
						//this makes sure that they don't show up on the screen
						else if(($diff->days < 0 ) || ($exam->exam_date < $today))
						{
							continue;
						}
						
					}
				?>
    	</div>
    	<!--
    		<=?php          	
	            echo $posts->links();
            ?>-->
    	</div>
    	</div>
          
        
        
        
	
		

		<script src="/jquery-2.1.1.min.js"></script>
    	<script src="/twitterBootstrap/dist/js/bootstrap.min.js"></script>
    	<script src="/myScript.js"></script>
	</body>
</html>

