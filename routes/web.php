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

// user
Route::get('/signin', 'HomeController@signin')->name('view_signin');
Route::get('/signup', 'HomeController@signup')->name('view_signup');

Route::get('/', 'HomeController@index')->name('view_home');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::post('/register', 'HomeController@register')->name('register');

Route::get('/delivery', 'DeliveryController@index')->name('delivery');
Route::get('/stockpro', 'StockProController@index')->name('stockpro');

// admin
Route::get('/admin', 'Admin\HomeController@index')->name('view_admin_home');

Route::get('/admin/mem1', 'Admin\Mem1Controller@index')->name('view_admin_mem1');
Route::get('/admin/n1', 'Admin\N1Controller@index')->name('view_admin_n1');
Route::get('/admin/mp1', 'Admin\MP1Controller@index')->name('view_admin_mp1');
Route::get('/admin/cop', 'Admin\CopController@index')->name('view_admin_cop');
Route::get('/admin/sns1', 'Admin\Sns1Controller@index')->name('view_admin_sns1');
Route::get('/admin/set1', 'Admin\Set1Controller@index')->name('view_admin_set1');
Route::get('/admin/rack1', 'Admin\Rack1Controller@index')->name('view_admin_rack1');
Route::get('/admin/od1', 'Admin\Od1Controller@index')->name('view_admin_od1');
