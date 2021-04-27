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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/products', 'ProductController@index');
Route::get('/api/products/{website_slug_name}/{id}', 'ProductController@show');
Route::get('/api/search/{value}', 'ProductController@search');

Route::post('/api/login', 'UserController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
