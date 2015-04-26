<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('about', 'HomeController@getAbout');
Route::get('general', 'HomeController@getGeneral');
Route::get('ecology', 'HomeController@getEcology');
Route::get('travel', 'HomeController@getTravel');
Route::get('water-resources', 'HomeController@getWaterResources');
Route::get('history', 'HomeController@getHistory');
Route::get('forgot-password', 'HomeController@getForgotPassword');

Route::group(["prefix"=>"register"], function () {
    Route::get('', 'RegisterController@getBasicRegister');
    Route::get('profile', 'RegisterController@getProfileRegister');
    Route::get('account', 'RegisterController@getAccountRegister');

//    Route::post('/', 'RegisterController@doBasicRegister');
    Route::post('profile/save', 'RegisterController@doProfileRegister');
    Route::post('account/save', 'RegisterController@doAccountRegister');
});

Route::group(['prefix'=>'admin'], function () {
    Route::get('', 'AdminController@index');
    Route::get('main-category', 'MainCategoryApiController@getIndex');
    Route::get('content', 'ContentApiController@getIndex');
    Route::get('user', 'UserApiController@getIndex');
    Route::get('role', 'RoleApiController@getIndex');
});

Route::group(['prefix'=>'admin/api'], function () {

    Route::resource('category', 'CategoryApiController');

//    Route::resource('user', 'UserApiController');
    Route::controller('user', 'UserApiController');
    Route::controller('role', 'RoleApiController');
    Route::resource('content', 'ContentApiController');
    Route::resource('content-type', 'ContentTypeApiController');

    Route::post('main-category/{id}/categories/save', 'MainCategoryApiController@postCreateCategory');
    Route::get('main-category/{id}/categories', 'MainCategoryApiController@getCategories');

    Route::controller('main-category', 'MainCategoryApiController');


});