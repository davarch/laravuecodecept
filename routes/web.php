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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@index')->name('index');
Route::get('/{slug}', 'PagesController@other');
Route::get('/news/{slug}', 'NewsController@detail');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/news', function () {
    return view('admin.news');
});

Route::get('/admin/pages', function () {
    return view('admin.pages');
});
