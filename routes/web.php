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
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin'], function () {
	Route::get('/login', 'AdminController@showLoginForm')->name('admin.login');
	Route::get('/dashboard', 'AdminController@showDashboard')->name('admin.dashboard');
	Route::resource('/user', 'UserController');
});

Route::group(['prefix' => 'datatable'], function () {
	Route::post('/user/list', 'UserController@dataTable')->name('users.list');
});