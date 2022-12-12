<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajasinn
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajasinn . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\CajasinnController;

$app->group('', function ($route) {
    $route->get('/cajasinn', CajasinnController::class .':index')->setName('cajasinn.index');
    $route->get('/cajasinn/datatable', CajasinnController::class .':datatable')->setName('cajasinn.datatable');
    $route->get('/cajasinn/show/{id}', CajasinnController::class .':show')->setName('cajasinn.show');
    $route->get('/cajasinn/create', CajasinnController::class .':create')->setName('cajasinn.create');
    $route->post('/cajasinn/store', CajasinnController::class .':store')->setName('cajasinn.store');
    $route->get('/cajasinn/edit/{id}', CajasinnController::class .':edit')->setName('cajasinn.edit');
    $route->post('/cajasinn/update', CajasinnController::class .':update')->setName('cajasinn.update');
    $route->post('/cajasinn/destroy/{id}', CajasinnController::class .':destroy')->setName('cajasinn.destroy');
    $route->get('/cajasinn/delete/{id}', CajasinnController::class .':deleteFile')->setName('cajasinn.delete.file');
    $route->get('/cajasinn/export/{type}', CajasinnController::class .':export')->setName('cajasinn.export');
})->add(new AuthMiddleware($container));
