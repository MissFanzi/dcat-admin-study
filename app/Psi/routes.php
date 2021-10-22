<?php

use Dcat\Admin\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Mosiboom\DcatIframeTab\Controllers\IframeController;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/home', 'HomeController@index');
});
Route::group([
    'prefix'     => config('admin.route.prefix'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $controller = IframeController::class;
    $router->get('/', $controller . '@index');
});
