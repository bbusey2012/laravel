<?php
	
	
	//The user_info is the name of the database that we want to add the column to
	//$table->string('First_name') creates the column named First_name of type string
	
	Schema::table('users', function($table)
	{
		$table->string('first_name');
		$table->string('last_name');
		$table->string('e-mail');
		$table->string('username');
		$table->string('password');
		$table->string('remember_token', 100)->nullable();

	});
	

	echo "Successfully added columns to table";
?>