<?php namespace App\Http\Controllers;

class RegisterController extends HomeController {

    public function getBasicRegister() {
        return view('register.basic');
    }

    public function getProfileRegister() {
        return view('register.profile');
    }

    public function getAccountRegister() {
        return view('register.account');
    }

    public function doBasicRegister() {


    }

    public function doProfileRegister() {

    }

    public function doAccountRegister() {

    }

}