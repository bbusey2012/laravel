<?php
class UserController extends BaseController
{
	
	function showHomePage()
	{
		return View::make('home');  
	}

	function showCSC211()
	{
		return View::make('CSC211');
	}

	function showCSC241()
	{
		return View::make('CSC241');
	}

	function showMTH121()
	{
		return View::make('MTH121');
	}

	function showMTH243()
	{
		return View::make('MTH243');
	}

	function show1834()
	{
		return View::make('1834Soft');
	}

	function showTests()
	{
		return View::make('tests');
	}

	
	function showCreateAccount()
	{
		return View::make('create_account');
	}
	
	
	function showLoginPage()
	{
		return View::make('login_form');
	}
	
	function showLogoutPage()
	{
		return View::make('logout');
	}
	
	function loginSuccess()
	{
		return View::make('loginSuccessful');
	}

	function doLogout()
	{
		Auth::logout();
		//echo "You have been logged out!";
		return Redirect::to('/home')->with('message', 'You have been successuflly logged out!');
	}

	
	function doRegistration()
	{
		//get all the data from the create account form
		$userData = Input::all();

		//The sanitizing rules that form must pass before the user's info can be put in the database
		//alpha checks to me sure that the user has entered only alphabetical characters
		//required makes the field a required field

		$validationRules = array(
			'firstname' => array('required'),
			'lastname' => array('required'),
			'e-mail' => array('email','required'),
			'username' => array('required'),
			'password' => array('required'),
		);

		//How you make your own error messages
		$customErrors = array(
			'required' => 'This is a required field',
			'unique' => 'Username is taken',
			'alpha' => 'May only contain letters',
			'alpha_num' => 'May only contain letters and numbers',
			'email' => array(
				'required' => 'Must be a valid email address',
				'unique' => 'Email address already in use',
				),
			'confirmed' => 'Must match the above password',
			'numeric' => 'Must contain at least one number',
			);

		//makes the validator that will validate the form using the validation rules 
		$validator = Validator::make($userData,$validationRules,$customErrors);


		//If form passes sanitizating then add user to database
		if($validator->passes())
		{
			DB::table('users')->insert(
	        array("first_name" => Input::get('firstname'),
	              "last_name" => Input::get("lastname"),
	              "e-mail" => Input::get("e-mail"),
	              "username" => Input::get("username"),
	              "password" => Hash::make(Input::get("password")),	
	        	)
	    	);

			/*
			//Sends e-mail to user thanking them for registering
			Mail::send('emails.welcome', array('firstname'=>Input::get('firstname')), function($message)
			{
        		$message->to(Input::get('e-mail'), Input::get('firstname').' '.Input::get('lastname'))->subject('Welcome to the Laravel 4 Auth App!');
    		});
    		*/

            return Redirect::to('/login')->with('message','Thank you for registering!');
		}

		//Otherwise, return user to create account page, 
		//showing them the errors they made when they filled out the create account form
		if($validator->fails())
		{
			return Redirect::to('/create')->withErrors($validator);
		}
	}
	

	function doLogin()
	{
		$loginInfo = Input::all();

		$validationRules = array('username' => 'required', 'password' => 'required',);

		$customErrors = array('required' => 'This is a required field');

		$validator = Validator::make($loginInfo,$validationRules,$customErrors);

		if ($validator->fails()) 
		{
			return Redirect::to('/login')
			->withErrors($validator) // send back all errors to the login form
			->withInput(Input::old('password')); // send back the input (not the password) so that we can repopulate the form
		}

		else 
		{

			// create our user data for the authentication
			$userdata = array(
				'username' 	=> Input::get('username'),
				'password' 	=> Input::get('password')
			);


			//attempt to do the login
			if (Auth::attempt($userdata)) 
			{
				return Redirect::to('/dashboard');
			} 

			else 
			{

				// send back the input (not the password) so that we can repopulate the form
				return Redirect::to('/login')->with('message','Incorrect username or password')->withInput(Input::except('password')); 
			}
		}
	}
}

?>