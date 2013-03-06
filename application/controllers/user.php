<?php

class User_Controller extends Base_Controller {
	//RESTful controllers require you to use the get_ method instead of an action_ method
	public $restful = true;

	############ GETS ##############
	//Display the user login form
	public function get_login() {
		return View::make('public.user.login');
	}

	//Log the user out 
	public function get_logout () {
		Auth::logout();
		return Redirect::to('')->with('logged_out', true);
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
		$registration_rules = array(
			'email' => 'required|email|unique:users', 
			'password' => 'required',
			'password-repeat' => 'required',
			'password' => 'same:password-repeat'
		);

		//Run the form field validation per our rules
		$registration = Validator::make($user_details, $registration_rules);
		
		if ($registration->fails()) :
			//If the registration validation fails we need to redirect back to the login view and display the errors
			return Redirect::to('register')->with_errors($registration);
		else :
			//Create the new user account
			$user = new User();
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->status = 0 ; //The status starts at 0, once email confirmed -> 1
			$user->last_seen = date('Y-m-d H:i:s');
			$user->save();

			/* We should send an email confirmation here and do the following once that's been done */

			//Log the new user in
			Auth::login($user);

			//Send the new user to their dashboard
			return Redirect::to('dashboard');
		endif;//end submitted login validation
	}//post_register

	########### LOGIN POST ##############
	//Capture and POST requests and process them (i.e. Login form submission)
	public function post_login() {
		//Capture the user entered login form fields
		$user_credentials = Input::all();
		
		//Create some validation rules
		$login_rules = array(
			'username' => 'required|email', 
			'password' => 'required'
		);

		//Run the form field validation per our rules
		$login = Validator::make($user_credentials, $login_rules);
		
		if ($login->fails()) :
			//If the login validation fails we need to redirect back to the login view and display the errors
			return Redirect::to('login')->with_errors($login);
		else :
			//Attempt to log the user in
			if (Auth::attempt($user_credentials)) :
				return Redirect::to('dashboard');
			else :
				return Redirect::to('login')->with('login_errors', true);
			endif;//end attempted login
		endif;//end submitted login validation
	}
}