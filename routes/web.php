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


Route::get('site/auth', 'Cp\AuthController@login');
Route::get('site/admin', 'Cp\DashboardController@index');
Route::get('site/admin/posts', 'Cp\PostController@index');
Route::get('site/admin/social_media', 'Cp\SocialMediaController@index');
Route::get('site/admin/setting', 'Cp\SettingController@index');
