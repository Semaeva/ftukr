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
//    return view('welcome');
//});

use App\Http\Controllers\HomeController;
Route::get('/main/', [HomeController::class, 'Index']);
Route::get('/', [HomeController::class, 'Index']);

use App\Http\Controllers\NewsController;
Route::get('/all-news', 'App\Http\Controllers\NewsController@index');
Route::get('/news/{id}', 'App\Http\Controllers\NewsController@show');

//Route::get('/all-news', 'App\Http\Controllers\NewsController');


Route::resource('admin', 'App\Http\Controllers\AdminController'); // Laravel 8
Route::resource('managers', 'App\Http\Controllers\TeamManagersController'); // Laravel 8
Route::resource('positions', 'App\Http\Controllers\PositionsController');
Route::resource('positions', 'App\Http\Controllers\ChineseTeachersController');


