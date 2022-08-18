<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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

    Route::get('/', function () {
        return view('dashboard');
    })/*->middleware('auth')*/;

    Route::get('/dashboard', function () {
        return view('dashboard');
    })/*->middleware(['auth'])*/->name('dashboard');
});


Route::get('/dale', function () {
    return view('dale');
});




// Rotas de Produtos
Route::resource('/products', ProdutosController::class);
/*Route::controller(ProdutosController::class)->group(function () {
    Route::get('/produtos', 'index')->name('products.index');
    Route::get('/produtos/criar', 'create')->name('products.create');
    Route::post('/produtos/salvar', 'store')->name('products.store');
    Route::delete('/produtos/deletar/{id}', 'destroy')->name('products.destroy');
    Route::post('/produtos/editar/{id}', 'edit')->name('products.edit');
});*/


require __DIR__ . '/auth.php';
