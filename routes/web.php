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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('admin/dashboard','Admin\AdminController@dashboard')->name('admin.dashboard');


Auth::routes(['register'=>false]);

Route::get('/','Front\FrontController@home')->name('front.home');
Route::get('/about','Front\AboutController@about')->name('front.about');
Route::get('/resume','Front\ResumeController@resume')->name('front.resume');
Route::get('/service','Front\ServiceController@service')->name('front.service');
Route::get('/portfolio','Front\PortfolioController@portfolio')->name('front.portfolio');
Route::get('/contact','Front\ContactController@contact')->name('front.contact');

Route::get('/home', 'HomeController@index')->name('home');
