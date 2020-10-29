<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\routingController;
use App\posts;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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

Route::get('google', function () {
    return view('googleAuth');
});

Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('/createPost', 'routingController@routing')->middleware('auth');
Route::get('/register', function () {
    return view('register');
});
Route::post('/', 'RegisterController@store');

Route::post('/createPost', 'PostsController@store')->middleware('auth');



Route::get('/', 'HomeController@index')->name('home');


Route::get('/', function () {
    $posts = posts::all();
    return view('home', compact('posts'));
});


Route::get('/home', function () {
    $posts = posts::all();
    return view('home', compact('posts'));
});

Route::get('post/{id}', function ($id) {
    $postDetail = posts::where('id', '=', $id)->get();

    return view('post', compact('postDetail'));
});

Route::get('/profile', function () {

    return view('profile');
});

Route::post('/profile', 'UpdateUserController@store');

Route::get('/myposts', function (Request $request) {
    $sessionID = Auth::id();
    $posts = posts::where('userid', '=', $sessionID)->get();
    return view('myposts', compact('posts'));
})->middleware('auth');

Route::post('/myposts', 'PostsController@delete');
Auth::routes();


Route::get('image-cropper', 'CropperController@index');
Route::post('image-cropper/upload', 'CropperController@upload');
