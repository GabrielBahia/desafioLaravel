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


Route::get('/dale', function() {
    return view('dale');
});

Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/produtos/criar', [ProdutosController::class, 'create']);
Route::post('/produtos/salvar', [ProdutosController::class, 'store']);


require __DIR__.'/auth.php';
