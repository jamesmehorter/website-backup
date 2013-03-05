<?php

class Dashboard_Controller extends Base_Controller {
	
	public function action_index () {
		if (Auth::check()) : 
			return View::make('dashboard.index');
		else :
			return View::make('public.user.login');
		endif;
	}
}