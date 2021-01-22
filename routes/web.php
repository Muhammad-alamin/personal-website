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
// return view('welcome');
//});
Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard','Admin\AdminController@dashboard')->name('admin.dashboard');
    Route::resource('admin/portfolio','Admin\PortfolioController');
    Route::get('admin/contact/index','Admin\ContactController@index' )->name('admin.contact.index');
    Route::resource('admin/user', 'Admin\UserController');
});



Auth::routes(['register' => false]);

Route::get('/','Front\FrontController@home')->name('front.home');
Route::get('/about','Front\AboutController@about')->name('front.about');
Route::get('/resume','Front\ResumeController@resume')->name('front.resume');
Route::get('/service','Front\ServiceController@service')->name('front.service');
Route::get('/portfolio','Front\PortfolioController@portfolio')->name('front.portfolio');
Route::get('/portfolio/details/{id}','Front\PortfolioController@details')->name('front.portfolio.details');
Route::get('/contact','Front\ContactController@contact')->name('front.contact');
Route::post('/contact/store','Front\ContactController@store' )->name('front.contact.store');

Route::get('/home', 'HomeController@index')->name('home');
