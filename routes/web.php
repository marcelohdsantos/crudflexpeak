<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;


Route::get('/', [HomeController::class, 'index']); 

Route::resource('clientes', ClienteController::class);
Route::resource('fornecedores', FornecedorController::class);


// Route::get('/', [ClienteController::class, 'index']); 
// Route::get('/clientes/create', [ClienteController::class, 'create']);
// Route::post('clientes', [ClienteController::class, 'store']);
// Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit']);
// Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);

// rotas do fornecedor

// Route::get('/', [FornecedorController::class, 'index']);
// Route::get('/fornecedores/create', [FornecedorController::class, 'create']);
// Route::post('fornecedores', [FornecedorController::class, 'store']);
// Route::get('/fornecedores/edit/{id}', [FornecedorController::class, 'edit']);
// Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroy']);
