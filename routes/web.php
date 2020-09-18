<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cp\DashboardController;
use App\Http\Controllers\Cp\AuthController;
use App\Http\Controllers\Cp\SocialMediaController;
use App\Http\Controllers\Cp\PostController;
use App\Http\Controllers\Cp\UserController;
use App\Http\Controllers\Cp\SettingController;


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

Route::get('/', function(){
  return view('welcome');
});

Route::group(
  ['prefix' => 'site'],
   function(){

  Route::get('login', [AuthController::class, 'login']);
  Route::get('admin', [DashboardController::class, 'index']);
  Route::resource('admin/posts', PostController::class);
  Route::resource('admin/social_media', SocialMediaController::class);
  Route::get('admin/message',[SocialMediaController::class,'message']);
  // setting
  Route::get('admin/setting', [SettingController::class,'index']);
  // user
  Route::get('admin/users', [UserController::class,'index']);
  Route::get('admin/users/create', [UserController::class,'create']);
  Route::get('admin/users/edit', [UserController::class, 'edit']);
});
