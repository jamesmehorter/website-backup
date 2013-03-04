<?php

class Login_Controller extends Base_Controller {

	public $restful = true;

	//Display the login form
	//RESTful controllers require you to use the get_ method instead of an action_ method
	public function get_index() {
		return View::make('public.login');
	}

	//public function get_register() {

	//}

	//Capture and POST requests and process them (i.e. Login form submission)
	public function post_index() {

		//Cant get the form to post to this method!

		//Capture the user entered login form fields
		$user_details = Input::all();
		//Create some validation rules
		$rules = array('email' => 'required', 'password' => 'required');
		//Run the form field validation per our rules
		$validation = Validator::make($user_details, $rules);

		//If the validation fails we need to redirect back to the login view and display the errors
		if ($validation->fails()) :
			return Redirect::to('login')->with_errors($validation);
		endif;

		//return View::make('public.login');
	}
}