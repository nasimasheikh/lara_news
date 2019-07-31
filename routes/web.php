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
    return view('frontend.pages.home');
});
Route::resource('/admin', 'DashboardController');
Route::resource('/admin/category', 'CategoryController');

Route::get('/main','MainController@index');
Route::get('/main/register','MainController@create')->name('main.create');
Route::post('/main/store','MainController@store')->name('main.store');
Route::post('/main/check','MainController@checkUser');
Route::get('/main/successlogin','MainController@successlogin');
Route::get('/main/logout','MainController@logout');

