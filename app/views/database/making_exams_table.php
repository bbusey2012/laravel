<?php
	echo "Busy adding table to database, sir...";

	
	Schema::create('exams', function($table)
	{
		$table->increments('id');
	});

	echo "Successfully added table to database";
	
?>