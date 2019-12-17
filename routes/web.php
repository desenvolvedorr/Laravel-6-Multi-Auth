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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

// Rotas Admin
Route::get('/admin', 'Admin\AdminController@index')->name('admin.dashboard');
Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('consultant/home', 'HomeController@consultantHome')->name('consultant.home')->middleware('is_consul');

