<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajasamura
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajasamura . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\CajasamuraController;

$app->group('', function ($route) {
    $route->get('/cajasamura', CajasamuraController::class .':index')->setName('cajasamura.index');
    $route->get('/cajasamura/datatable', CajasamuraController::class .':datatable')->setName('cajasamura.datatable');
    $route->get('/cajasamura/show/{id}', CajasamuraController::class .':show')->setName('cajasamura.show');
    $route->get('/cajasamura/create', CajasamuraController::class .':create')->setName('cajasamura.create');
    $route->post('/cajasamura/store', CajasamuraController::class .':store')->setName('cajasamura.store');
    $route->get('/cajasamura/edit/{id}', CajasamuraController::class .':edit')->setName('cajasamura.edit');
    $route->post('/cajasamura/update', CajasamuraController::class .':update')->setName('cajasamura.update');
    $route->post('/cajasamura/destroy/{id}', CajasamuraController::class .':destroy')->setName('cajasamura.destroy');
    $route->get('/cajasamura/delete/{id}', CajasamuraController::class .':deleteFile')->setName('cajasamura.delete.file');
    $route->get('/cajasamura/export/{type}', CajasamuraController::class .':export')->setName('cajasamura.export');
})->add(new AuthMiddleware($container));
