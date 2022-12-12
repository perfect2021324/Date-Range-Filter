<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajaspelicano
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajaspelicano . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\CajaspelicanoController;

$app->group('', function ($route) {
    $route->get('/cajaspelicano', CajaspelicanoController::class .':index')->setName('cajaspelicano.index');
    $route->get('/cajaspelicano/datatable', CajaspelicanoController::class .':datatable')->setName('cajaspelicano.datatable');
    $route->get('/cajaspelicano/show/{id}', CajaspelicanoController::class .':show')->setName('cajaspelicano.show');
    $route->get('/cajaspelicano/create', CajaspelicanoController::class .':create')->setName('cajaspelicano.create');
    $route->post('/cajaspelicano/store', CajaspelicanoController::class .':store')->setName('cajaspelicano.store');
    $route->get('/cajaspelicano/edit/{id}', CajaspelicanoController::class .':edit')->setName('cajaspelicano.edit');
    $route->post('/cajaspelicano/update', CajaspelicanoController::class .':update')->setName('cajaspelicano.update');
    $route->post('/cajaspelicano/destroy/{id}', CajaspelicanoController::class .':destroy')->setName('cajaspelicano.destroy');
    $route->get('/cajaspelicano/delete/{id}', CajaspelicanoController::class .':deleteFile')->setName('cajaspelicano.delete.file');
    $route->get('/cajaspelicano/export/{type}', CajaspelicanoController::class .':export')->setName('cajaspelicano.export');
})->add(new AuthMiddleware($container));
