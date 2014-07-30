<?php
	echo "Busy adding table to database, sir...";

	
	Schema::create('users', function($table)
	{
		$table->increments('id');
	});

	echo "Successfully added table to database";
	
?>