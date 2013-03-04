<?php

class Base_Controller extends Controller {
	/**
		Contrstuct the Base Controller by adding view assets to each page load
	*/
	public function __construct(){

        //styles
        Asset::add('main_style', 'stylesheets/screen.css');
        Asset::add('foundation_style', 'libs/foundation/css/foundation.min.css');
        Asset::add('jqueryui_style', 'libs/jquery-ui/css/smoothness/jquery-ui-1.10.1.custom.min.css');

        //scripts
        Asset::add('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
        Asset::add('foundation_script', 'libs/foundation/js/foundation.min.js');
        Asset::add('jqueryui_script', 'libs/jquery-ui/js/jquery-ui-1.10.1.custom.min.js');
        
        parent::__construct();
    }

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}
}