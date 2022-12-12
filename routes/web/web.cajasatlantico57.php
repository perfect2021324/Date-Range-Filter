<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajasatlantico57
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajasatlantico57 . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\Cajasatlantico57Controller;

$app->group('', function ($route) {
    $route->get('/cajasatlantico57', Cajasatlantico57Controller::class .':index')->setName('cajasatlantico57.index');
    $route->get('/cajasatlantico57/datatable', Cajasatlantico57Controller::class .':datatable')->setName('cajasatlantico57.datatable');
    $route->get('/cajasatlantico57/show/{id}', Cajasatlantico57Controller::class .':show')->setName('cajasatlantico57.show');
    $route->get('/cajasatlantico57/create', Cajasatlantico57Controller::class .':create')->setName('cajasatlantico57.create');
    $route->post('/cajasatlantico57/store', Cajasatlantico57Controller::class .':store')->setName('cajasatlantico57.store');
    $route->get('/cajasatlantico57/edit/{id}', Cajasatlantico57Controller::class .':edit')->setName('cajasatlantico57.edit');
    $route->post('/cajasatlantico57/update', Cajasatlantico57Controller::class .':update')->setName('cajasatlantico57.update');
    $route->post('/cajasatlantico57/destroy/{id}', Cajasatlantico57Controller::class .':destroy')->setName('cajasatlantico57.destroy');
    $route->get('/cajasatlantico57/delete/{id}', Cajasatlantico57Controller::class .':deleteFile')->setName('cajasatlantico57.delete.file');
    $route->get('/cajasatlantico57/export/{type}', Cajasatlantico57Controller::class .':export')->setName('cajasatlantico57.export');
})->add(new AuthMiddleware($container));
