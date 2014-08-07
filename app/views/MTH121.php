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
	              <li><a href="/tests">Exams</a></li>
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
	           Linear Algebra
	        </h2>
	        
	        <h3>Due Today</h3>
	        <hr>
	        	<?php
	        		date_default_timezone_set('America/New_York');
	        		$posts = Post::where('post_class','MTH 121')->get();
         			$exams = Exam::where('exam_class','MTH 121')->get();
                    $today = date('Y-m-d');

					foreach($posts as $post)
					{
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
						
					}

					foreach($exams as $exam)
					{
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
					$posts = Post::where('post_class','MTH 121')->get();
					$exams = Exam::where('exam_class','MTH 121')->get();
					$today = date('Y-m-d');

					foreach($posts as $post)
					{
						$today2 = date_create($today);
						$Post = date_create($post->post_date);
					    $diff = date_diff($today2,$Post);
					
						$postDate = $post->post_date;
						$date = strtotime($postDate);
						$day = date('l',$date);

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
						
					}

					foreach($exams as $exam)
					{
						$today2 = date_create($today);
						$examDate = date_create($exam->exam_date);
					    $diff = date_diff($today2,$examDate);
					    $tomorrow = new DateTime("tomorrow");
					    $yesterday = new DateTime("yesterday");
					
						$ExamDate = $exam->exam_date;
						$date = strtotime($ExamDate);
						$day = date('m/d',$date);
						$dayOfWeek = date('l',$date);

						if(($diff->days == 1) && ($examDate > $today2)) 
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
					$posts = Post::where('post_class','MTH 121')->get();
					$exams = Exam::where('exam_class','MTH 121')->get();
					$today = date('Y-m-d');

					foreach($posts as $post)
					{
						$today2 = date_create($today);
						$Post = date_create($post->post_date);
					    $diff=date_diff($today2,$Post);
					    $tomorrow = new DateTime("tomorrow");
					    $yesterday = new DateTime("yesterday");
					
						$postDate = $post->post_date;
						$date = strtotime($postDate);
						$day = date('m/d',$date);
						$dayOfWeek = date('l',$date);

						if(($post->post_date !== $today) && ($diff->days <= 5) && ($Post != $tomorrow) && ($Post != $yesterday)) 
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

						else
						{
							continue;
						}
						
					}

					foreach($exams as $exam)
					{
						$today2 = date_create($today);
						$examDate = date_create($exam->exam_date);
					    $diff = date_diff($today2,$examDate);
					    $tomorrow = new DateTime("tomorrow");
					    $yesterday = new DateTime("yesterday");
					
						$ExamDate = $exam->exam_date;
						$date = strtotime($ExamDate);
						$day = date('m/d',$date);
						$dayOfWeek = date('l',$date);

						if(($exam->exam_date !== $today) && ($diff->days <= 5) && ($examDate != $tomorrow) && ($examDate != $yesterday))  
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
					$posts = Post::where('post_class','MTH 121')->get();
					$exams = Exam::where('exam_class','MTH 121')->get();
					$today = date('Y-m-d');

					foreach($posts as $post)
					{
						$today2 = date_create($today);
						$Post = date_create($post->post_date);
					    $diff=date_diff($today2,$Post);
					
						$postDate = $post->post_date;
						$date = strtotime($postDate);
						$day = date('m/d',$date);
						$dayOfWeek = date('l',$date);

						if(($diff->days) >= 6)
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

						else
						{
							continue;
						}
						
					}

					foreach($exams as $exam)
					{
						$today2 = date_create($today);
						$examDate = date_create($exam->exam_date);
					    $diff = date_diff($today2,$examDate);
					
						$ExamDate = $exam->exam_date;
						$date = strtotime($ExamDate);
						$day = date('m/d',$date);
						$dayOfWeek = date('l',$date);

						if(($diff->days) >= 6)
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

						else
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

