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

    // 単品商品管理
    $router->resource('single-menus', SingleMenuController::class);

    // セット商品管理
    $router->resource('set-menus', SetMenuController::class);

    // お知らせ管理
    $router->resource('new-contents', NewContentController::class);

    // オーダー管理
    $router->resource('order-mgts', OrderMgtController::class);


});
