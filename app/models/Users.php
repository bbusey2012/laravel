<?php

class User extends Eloquent
{
	
	protected $fillable = array('first_name','last_name','username','e-mail','password');

	//how we link the user to their posts 
	public function post()
	{
		return $this->hasMany('Post');
	}

	public function exam()
	{
		return $this->hasMany('Exam');
	}


}

?>