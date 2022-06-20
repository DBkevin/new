<?php

use App\Admin\Controllers\CategoryController;
use Doctrine\DBAL\Schema\Index;
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
    return view('home');
})->name('index');
Route::get('/project/{topic:id}','TopicController@show')->where('id','[0-9]+')->name("showTopic"); //匹配数字必须考前

Route::get("/project/{category:dirname}","CategoryController@Index")->where('dirname', '[A-Za-z]+')->name('catgory');
