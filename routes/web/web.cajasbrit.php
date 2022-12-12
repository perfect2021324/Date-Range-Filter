<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajasbrit
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajasbrit . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\CajasbritController;

$app->group('', function ($route) {
    $route->get('/cajasbrit', CajasbritController::class .':index')->setName('cajasbrit.index');
    $route->get('/cajasbrit/datatable', CajasbritController::class .':datatable')->setName('cajasbrit.datatable');
    $route->get('/cajasbrit/show/{id}', CajasbritController::class .':show')->setName('cajasbrit.show');
    $route->get('/cajasbrit/create', CajasbritController::class .':create')->setName('cajasbrit.create');
    $route->post('/cajasbrit/store', CajasbritController::class .':store')->setName('cajasbrit.store');
    $route->get('/cajasbrit/edit/{id}', CajasbritController::class .':edit')->setName('cajasbrit.edit');
    $route->post('/cajasbrit/update', CajasbritController::class .':update')->setName('cajasbrit.update');
    $route->post('/cajasbrit/destroy/{id}', CajasbritController::class .':destroy')->setName('cajasbrit.destroy');
    $route->get('/cajasbrit/delete/{id}', CajasbritController::class .':deleteFile')->setName('cajasbrit.delete.file');
    $route->get('/cajasbrit/export/{type}', CajasbritController::class .':export')->setName('cajasbrit.export');
})->add(new AuthMiddleware($container));
