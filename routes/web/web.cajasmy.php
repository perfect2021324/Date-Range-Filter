<?php
/*
|--------------------------------------------------------------------------
| Web Routes - Cajasmy
|--------------------------------------------------------------------------
| Here is where you can register web routes for your cajasmy . 
*/
use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\Admin\CajasmyController;

$app->group('', function ($route) {
    $route->get('/cajasmy', CajasmyController::class .':index')->setName('cajasmy.index');
    $route->get('/cajasmy/datatable', CajasmyController::class .':datatable')->setName('cajasmy.datatable');
    $route->get('/cajasmy/show/{id}', CajasmyController::class .':show')->setName('cajasmy.show');
    $route->get('/cajasmy/create', CajasmyController::class .':create')->setName('cajasmy.create');
    $route->post('/cajasmy/store', CajasmyController::class .':store')->setName('cajasmy.store');
    $route->get('/cajasmy/edit/{id}', CajasmyController::class .':edit')->setName('cajasmy.edit');
    $route->post('/cajasmy/update', CajasmyController::class .':update')->setName('cajasmy.update');
    $route->post('/cajasmy/destroy/{id}', CajasmyController::class .':destroy')->setName('cajasmy.destroy');
    $route->get('/cajasmy/delete/{id}', CajasmyController::class .':deleteFile')->setName('cajasmy.delete.file');
    $route->get('/cajasmy/export/{type}', CajasmyController::class .':export')->setName('cajasmy.export');
})->add(new AuthMiddleware($container));
