<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {

    Route::group(['namespace' => 'Admin'], function () {
        Route::resource('todos', 'TodosController', ['except' => ['create', 'edit']])->middleware('auth:api');
    });

    Route::group(['namespace' => 'Auth'], function () {
        Route::post('register', 'RegisterController');
        Route::post('login', 'LoginController');
        Route::post('logout', 'LogoutController')->middleware('auth:api');
    });
});

Route::group(['prefix' => '/admin', 'namespace' => 'Api\Admin', 'as' => 'api.'], function () {
    Route::resource('dashboard', 'DashboardController', ['except' => ['create', 'edit']]);
});

Route::group(['prefix' => '/admin', 'namespace' => 'Api\Admin', 'as' => 'api.'], function () {
    Route::resource('news', 'NewsController', ['except' => ['create', 'edit']]);
});

Route::group(['prefix' => '/client', 'namespace' => 'Api\Client', 'as' => 'api.'], function () {
    Route::resource('comments', 'CommentsController', ['except' => ['create', 'edit']]);
});
