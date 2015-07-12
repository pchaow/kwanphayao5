<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends BaseController
{

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

    public function index()
    {
        return view('home.index');
    }

    public function login()
    {
        return view('home.login');
    }

    public function postLogin()
    {
        $email = \Input::get('email');
        $password = \Input::get('password');

        $credentials = [
            'email' => $email,
            'password' => $password
        ];

        if (\Auth::attempt($credentials)) {
            return \Redirect::to("/");
        } else {
            return $credentials;
        }
    }

}
