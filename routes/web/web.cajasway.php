<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajasway
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajasway . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\CajaswayController;

$app->group('', function ($route) {
    $route->get('/cajasway', CajaswayController::class .':index')->setName('cajasway.index');
    $route->get('/cajasway/datatable', CajaswayController::class .':datatable')->setName('cajasway.datatable');
    $route->get('/cajasway/show/{id}', CajaswayController::class .':show')->setName('cajasway.show');
    $route->get('/cajasway/create', CajaswayController::class .':create')->setName('cajasway.create');
    $route->post('/cajasway/store', CajaswayController::class .':store')->setName('cajasway.store');
    $route->get('/cajasway/edit/{id}', CajaswayController::class .':edit')->setName('cajasway.edit');
    $route->post('/cajasway/update', CajaswayController::class .':update')->setName('cajasway.update');
    $route->post('/cajasway/destroy/{id}', CajaswayController::class .':destroy')->setName('cajasway.destroy');
    $route->get('/cajasway/delete/{id}', CajaswayController::class .':deleteFile')->setName('cajasway.delete.file');
    $route->get('/cajasway/export/{type}', CajaswayController::class .':export')->setName('cajasway.export');
})->add(new AuthMiddleware($container));
