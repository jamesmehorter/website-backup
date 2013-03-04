<?php

class Public_Controller extends Base_Controller {
	public function action_index () {
		return View::make('public.index');
	}
}