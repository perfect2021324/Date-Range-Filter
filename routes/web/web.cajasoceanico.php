<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajasoceanico
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajasoceanico . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\CajasoceanicoController;

$app->group('', function ($route) {
    $route->get('/cajasoceanico', CajasoceanicoController::class .':index')->setName('cajasoceanico.index');
    $route->get('/cajasoceanico/datatable', CajasoceanicoController::class .':datatable')->setName('cajasoceanico.datatable');
    $route->get('/cajasoceanico/show/{id}', CajasoceanicoController::class .':show')->setName('cajasoceanico.show');
    $route->get('/cajasoceanico/create', CajasoceanicoController::class .':create')->setName('cajasoceanico.create');
    $route->post('/cajasoceanico/store', CajasoceanicoController::class .':store')->setName('cajasoceanico.store');
    $route->get('/cajasoceanico/edit/{id}', CajasoceanicoController::class .':edit')->setName('cajasoceanico.edit');
    $route->post('/cajasoceanico/update', CajasoceanicoController::class .':update')->setName('cajasoceanico.update');
    $route->post('/cajasoceanico/destroy/{id}', CajasoceanicoController::class .':destroy')->setName('cajasoceanico.destroy');
    $route->get('/cajasoceanico/delete/{id}', CajasoceanicoController::class .':deleteFile')->setName('cajasoceanico.delete.file');
    $route->get('/cajasoceanico/export/{type}', CajasoceanicoController::class .':export')->setName('cajasoceanico.export');
})->add(new AuthMiddleware($container));
