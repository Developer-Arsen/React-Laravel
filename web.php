<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('main_page', 'UserController@index')->name('main_page');
Route::post('profile/{id}', 'UserController@profile')->name('profile');
Route::post('tasks/{project_id}', 'UserController@tasks')->name('tasks');
