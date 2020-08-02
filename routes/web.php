<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'site/', 'namespace' => 'Cp'], function(){
    Route::get('auth', 'AuthController@login');
    Route::get('admin', 'DashboardController@index');
    Route::resource('admin/posts', 'PostController');
    Route::resource('admin/social_media', 'SocialMediaController');
    Route::get('admin/message', 'SocialMediaController@message');
    Route::get('admin/setting', 'SettingController@index');
    // user
    Route::get('admin/users', 'UserController@index');
    Route::get('admin/users/create', 'UserController@create');
    Route::get('admin/users/edit', 'UserController@edit');
});
