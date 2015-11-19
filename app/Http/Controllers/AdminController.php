<?php namespace App\Http\Controllers;

use View;

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index(){
		return View::make('admins.index');
	}

	public function getCategory(){
		return View::make('admins.category');
	}

	public function getMainCategory(){
		return View::make('admins.main-category');
	}

	public function getUser() {
		return View::make('admins.user');
	}

	public function getRole() {
		return View::make('admins.role');
	}

	// normal unspecific content's category (content type).
	public function getContent(){
		return View::make('admins.content');
	}

	public function getBibliography(){
		return View::make('admins.bibliography');
	}

	public function getPage(){
		return View::make('admins.page');
	}

}
