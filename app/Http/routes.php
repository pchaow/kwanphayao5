<?php

\Blade::setContentTags('<%', '%>'); // for variables and all things Blade
\Blade::setEscapedContentTags('<%%', '%%>'); // for escaped data
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
Route::get('/login', 'HomeController@login');
Route::get('/logout', 'HomeController@getLogout');
Route::post('/login', 'HomeController@postLogin');

Route::group(["prefix" => "register"], function () {
    Route::get('', 'RegisterController@getBasicRegister');
    Route::get('profile', 'RegisterController@getProfileRegister');
    Route::get('account', 'RegisterController@getAccountRegister');

//    Route::post('/', 'RegisterController@doBasicRegister');
    Route::post('profile/save', 'RegisterController@doProfileRegister');
    Route::post('account/save', 'RegisterController@doAccountRegister');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'AdminController@index');
    Route::get('category', 'AdminController@getCategory');
    Route::get('content', 'AdminController@getContent');
    Route::get('user', 'AdminController@getUser');
    Route::get('role', 'AdminController@getRole');
});

Route::group(['prefix' => '/api'], function () {

    Route::resource('content', "API\ContentApiController");
    Route::resource('user', "API\UserApiController");
    Route::resource('role', "API\RoleApiController");
    Route::resource('category', "API\CategoryApiController");
    Route::resource('category.sub-category', "API\SubCategoryApiController");

});


Route::get('/img/{path}', function (League\Glide\Server $server, \Illuminate\Http\Request $request) {
    $server->outputImage($request);
})->where('path', '.*');

use Rhumsaa\Uuid\Uuid;

Route::post('tinymce-upload', function () {
    $uuid = Uuid::uuid4();
    $storage_path = "app/temp/";
    $destination_path = storage_path($storage_path);
    Input::file('file')->move($destination_path, $uuid);

    $url = "/img/temp/$uuid";
    $response = [
        'url' => $url,
        'base_url' => url()
    ];
    return $response;
});
