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

use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/contact', function() {
    return view('contact');
});

// Route::get('/portal', 'portalController@index')->name('portal');

Route::get('/portal', function() {
   return view('portal');
});

// Route::group(['middleware' => ['web']], function () {

// });