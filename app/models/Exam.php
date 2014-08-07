<?php

class Exam extends Eloquent
{
	
	protected $fillable = array('exam_class','exam_title','exam_class','exam_content');


	//how we link the user to their posts 
	public function user()
	{
		//return $this->belongsTo('User');
	}


}

?>