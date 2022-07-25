<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('Category', 'CategoryController');
    $router->resource('topic', 'TopicController');
    $router->get('gettopic', 'TopicController@api');
    $router->get('getdoctor', 'DoctorController@api');
    $router->resource('doctor', 'DoctorController');
    $router->resource('information', 'InformationController');
    $router->resource('question', 'QuestionController');
    $router->resource('news', 'NewsController');
    $router->any('users/images/{dir?}', 'FileController@handle');
});
