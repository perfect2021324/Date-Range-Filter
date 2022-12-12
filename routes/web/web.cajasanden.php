<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajasanden
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajasanden . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\CajasandenController;

$app->group('', function ($route) {
    $route->get('/cajasanden', CajasandenController::class .':index')->setName('cajasanden.index');
    $route->get('/cajasanden/datatable', CajasandenController::class .':datatable')->setName('cajasanden.datatable');
    $route->get('/cajasanden/show/{id}', CajasandenController::class .':show')->setName('cajasanden.show');
    $route->get('/cajasanden/create', CajasandenController::class .':create')->setName('cajasanden.create');
    $route->post('/cajasanden/store', CajasandenController::class .':store')->setName('cajasanden.store');
    $route->get('/cajasanden/edit/{id}', CajasandenController::class .':edit')->setName('cajasanden.edit');
    $route->post('/cajasanden/update', CajasandenController::class .':update')->setName('cajasanden.update');
    $route->post('/cajasanden/destroy/{id}', CajasandenController::class .':destroy')->setName('cajasanden.destroy');
    $route->get('/cajasanden/delete/{id}', CajasandenController::class .':deleteFile')->setName('cajasanden.delete.file');
    $route->get('/cajasanden/export/{type}', CajasandenController::class .':export')->setName('cajasanden.export');
})->add(new AuthMiddleware($container));
