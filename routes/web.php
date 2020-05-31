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


Route::group(['prefix' => 'admin'], function () {
    Route::middleware('role:access')->group(function (){
        Route::get('news', function () {
            return view('admin.news');
        });
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        });
        Route::get('pages', function () {
            return view('admin.pages');
        });
        Route::get('todos', function () {
            return view('admin.todos');
        });
    });
});
