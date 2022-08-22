<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function () {

    // >>> insira suas rotas aqui !!!!! <<<

    // Rota Pagina inical
    Route::get('/index', function () {
        return view('index');
    });

    // Rotas de Produtos
    Route::resource('/products', ProductsController::class);

    // Rotas de Estoque
    Route::resource('/stocks', StocksController::class);

    Route::post('/stocks/selected', [StocksController::class, 'selectedProducts'])->name('stocks.selected');

    // Rotas de Usuários
    Route::resource('/users', UsersController::class);

    /*Route::get('/', function () {
        return view('dashboard');
    })->middleware('auth');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    */
});


Route::get('/dale', function () {
    return view('dale');
});





require __DIR__ . '/auth.php';
