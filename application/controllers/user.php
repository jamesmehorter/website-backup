<?php

class User_Controller extends Base_Controller {
	//RESTful controllers require you to use the get_ method instead of an action_ method
	public $restful = true;

	############ GETS ##############
	//Display the user login form
	public function get_login() {
		return View::make('public.user.login');
	}

	//Display the user registration form
	public function get_register() {
		return View::make('public.user.register');
	}

	########### REGISTRATION POST ##############
	//Capture and Registration POST request and process it
	public function post_register() {
		//Capture the user entered login form fields
		$user_details = Input::all();

		//Create some validation rules
		$validation_rules = array(
			'email' => 'required|email|unique:users', 
			'password' => 'required',
			'password-repeat' => 'required'
		);

		//Run the form field validation per our rules
		$validation = Validator::make($user_details, $validation_rules);
		
		if ($validation->fails()) :
			//If the validation fails we need to redirect back to the login view and display the errors
			return Redirect::to('register')->with_errors($validation);
		else :
			//Attempt to register the user
			try {
				$user = new User();
				$user->email = Input::get('email');
				$user->password = Hash::make(Input::get('password'));
				$user->status = 0 ;
				$user->last_seen = date('Y-m-d H:i:s');
				$user->save();
				Auth::login($user);
				return Redirect::to('dashboard');
			} catch ( Exception $e ) {
				return Redirect::to('register')->with_errors("Sorry, something went wrong. Please try again.");
			}

		endif;//end submitted login validation
	}

	########### LOGIN POST ##############
	//Capture and POST requests and process them (i.e. Login form submission)
	public function post_login() {
		//Capture the user entered login form fields
		$user_credentials = Input::all();
		
		//Create some validation rules
		$validation_rules = array(
			'username' => 'required|email', 
			'password' => 'required'
		);

		//Run the form field validation per our rules
		$validation = Validator::make($user_credentials, $validation_rules);
		
		if ($validation->fails()) :
			//If the validation fails we need to redirect back to the login view and display the errors
			return Redirect::to('login')->with_errors($validation);
		else :
			//Attempt to log the user in
			if (Auth::attempt($user_credentials)) :
				return Redirect::to('dashboard');
			else :
				return Redirect::to('login')->with_errors("Incorrect login information");
			endif;//end attempted login
		endif;//end submitted login validation
	}
}