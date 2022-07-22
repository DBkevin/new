<?php


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

Route::get('/', 'IndexController@Index')->name('index');
Route::get('/project/{id}','TopicController@show')->where('id','[0-9]+')->name("showTopic"); //匹配数字必须考前
Route::get("/project/{category:dirname}","CategoryController@Index")->where('dirname', '[A-Za-z]+')->name('catgory');
Route::get('/doctor','DoctorController@Index')->name('doctorIndex');
Route::get('/doctor/{doctor:id}','DoctorController@show')->name('doctorShow');
Route::get('/zs',"ZsController@index")->name("zsIndex");
Route::get("/zs/{id}","ZsController@show")->name('zsShow');
Route::get('/question',"QuestionController@index")->name("questionIndex");
Route::get("/question/{id}","QuestionController@show")->name('questionShow');


