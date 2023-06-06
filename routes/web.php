<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rota padrão (home)
Route::get('/', [OrderController::class, 'index']);

// Rota para cadastrar o pedido
Route::post('/saveOrder', [OrderController::class, 'saveOrder'])->name('saveOrder');
