<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/news', 'NewsController@index');
    $router->post('/news', 'NewsController@store');
    $router->get('/news/create', 'NewsController@create');
    $router->post('upload', 'UploadController@upImage');
});
