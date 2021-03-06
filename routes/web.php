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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/hello', function () {
//     return "Hello";
// });


// Route::get('/users/{id}', function ($id) {
//     return "The user id is : ".$id ;
// });

// Route::get('/', function () {
//     return view('pages.index');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/about', function () {
//     return view('pages.services');
// });
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/posts','PostsController');