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

Route::post('/main/start', 'MainController@start')->name('start');
Route::get('/profile/{username}', 'ProfileController@index')->name('profile.show');
Route::get('/profile/{username}/posts', 'ProfileController@posts')->name('profile.posts');
