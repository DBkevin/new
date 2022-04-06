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

Route::get('/', 'CategoryController@index');
Route::get('/{slug}/{id}','TopicController@show');
Route::get('/siteMap.xml', 'SitemapController@index');
Route::get('/{slug}','TopicController@index');