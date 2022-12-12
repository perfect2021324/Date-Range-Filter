<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajasplayaclub
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajasplayaclub . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\CajasplayaclubController;

$app->group('', function ($route) {
    $route->get('/cajasplayaclub', CajasplayaclubController::class .':index')->setName('cajasplayaclub.index');
    $route->get('/cajasplayaclub/datatable', CajasplayaclubController::class .':datatable')->setName('cajasplayaclub.datatable');
    $route->get('/cajasplayaclub/show/{id}', CajasplayaclubController::class .':show')->setName('cajasplayaclub.show');
    $route->get('/cajasplayaclub/create', CajasplayaclubController::class .':create')->setName('cajasplayaclub.create');
    $route->post('/cajasplayaclub/store', CajasplayaclubController::class .':store')->setName('cajasplayaclub.store');
    $route->get('/cajasplayaclub/edit/{id}', CajasplayaclubController::class .':edit')->setName('cajasplayaclub.edit');
    $route->post('/cajasplayaclub/update', CajasplayaclubController::class .':update')->setName('cajasplayaclub.update');
    $route->post('/cajasplayaclub/destroy/{id}', CajasplayaclubController::class .':destroy')->setName('cajasplayaclub.destroy');
    $route->get('/cajasplayaclub/delete/{id}', CajasplayaclubController::class .':deleteFile')->setName('cajasplayaclub.delete.file');
    $route->get('/cajasplayaclub/export/{type}', CajasplayaclubController::class .':export')->setName('cajasplayaclub.export');
})->add(new AuthMiddleware($container));
