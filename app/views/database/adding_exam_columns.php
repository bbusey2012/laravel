<?php

Schema::table('exams', function($table)
{
	$table->string('exam_title', 255);
	$table->text('exam_date');
	$table->date('exam_content');
});
	

	echo "Successfully added columns to table";
?>