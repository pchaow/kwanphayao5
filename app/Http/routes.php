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
    Route::get('category', 'AdminController@getCategory');
    Route::get('content', 'AdminController@getContent');
    Route::get('user', 'AdminController@getUser');
    Route::get('role', 'AdminController@getRole');
});

Route::group(['prefix'=>'/api'], function () {

    Route::resource('user',"API\UserApiController");
    Route::resource('role',"API\RoleApiController");
    Route::resource('category',"API\CategoryApiController");
    Route::resource('category.sub-category',"API\SubCategoryApiController");

});


Route::get('/img/{path}', function (League\Glide\Server $server, \Illuminate\Http\Request $request) {
    $server->outputImage($request);
})->where('path', '.*');