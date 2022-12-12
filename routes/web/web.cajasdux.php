<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajasdux
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajasdux . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\CajasduxController;

$app->group('', function ($route) {
    $route->get('/cajasdux', CajasduxController::class .':index')->setName('cajasdux.index');
    $route->get('/cajasdux/datatable', CajasduxController::class .':datatable')->setName('cajasdux.datatable');
    $route->get('/cajasdux/show/{id}', CajasduxController::class .':show')->setName('cajasdux.show');
    $route->get('/cajasdux/create', CajasduxController::class .':create')->setName('cajasdux.create');
    $route->post('/cajasdux/store', CajasduxController::class .':store')->setName('cajasdux.store');
    $route->get('/cajasdux/edit/{id}', CajasduxController::class .':edit')->setName('cajasdux.edit');
    $route->post('/cajasdux/update', CajasduxController::class .':update')->setName('cajasdux.update');
    $route->post('/cajasdux/destroy/{id}', CajasduxController::class .':destroy')->setName('cajasdux.destroy');
    $route->get('/cajasdux/delete/{id}', CajasduxController::class .':deleteFile')->setName('cajasdux.delete.file');
    $route->get('/cajasdux/export/{type}', CajasduxController::class .':export')->setName('cajasdux.export');
})->add(new AuthMiddleware($container));
