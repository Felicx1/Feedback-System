<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
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
    return view('Welcome');
});

Route::get('/greeting', function () {
   // return 'Hello World!';
   // return redirect()->route('myprofile');
   return redirect('user/profile')->with('status', 'Welcome to Laravel!'); 

});

//Route::get('/user', [UserController::class, 'index']);
 
// Route::get('/user', 'App\Http\Controllers\UserController@index');

// Route::get('/user/{id}', 'App\Http\Controllers\UserController@show');

//Route::get('/user/profile','App\Http\Controllers\UserController@index') ->name('profile');

//Larevel new feature

Route::controller(UserController::class)->group(function()
   {   
       //Route::get('/user/profile', 'index')->middleware(EnsureTokenIsValid::class);
       Route::get('/user/profile', 'index')->name('myprofile'); //named route
       Route::get('/user/{id}', 'show');
       Route::post('/user/profile', 'post');
       Route::get('/noaccess', 'noaccess');
       Route::post('/user', 'store');

});

//Route::resource('posts', PostsController::class);

Route::resources([
    'pages' => PagesController::class,
    'posts' => PostController::class,
]);