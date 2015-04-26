<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends BaseController {

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

    public function getTest3() {
        return view('test3');
    }

    public function getTest5() {
        return view('test5');
    }

    public function getTest51() {
        return view('test51');
    }

    public function index() {
        return view('home.index');
    }

    public function getAbout() {
        return view('home.about');
    }

    public function getGeneral() {
        return view('home.general');
    }

    public function getEcology() {
        return view('home.ecology');
    }

    public function getTravel() {
        return view('home.travel');
    }

    public function getWaterResources() {
        return view('home.water-resources');
    }

    public function getHistory() {
        return view('home.history');
    }

    public function getForgotPassword() {
        return view('home.forgot-password');
    }

}
