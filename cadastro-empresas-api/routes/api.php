<?php

use App\Http\Controllers\{
    EmpresaController,
    UnidadeController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('teste', function() {
	return 'Funcionando!!!';
});

Route::get('/empresa', [EmpresaController::class, 'Index']);
Route::post('/empresa/create', [EmpresaController::class, 'Store']);
Route::put('/empresa/{id}', [EmpresaController::class, 'Update']);
Route::get('/empresa/softdelete/{id}', [EmpresaController::class, 'SoftDelete']);

Route::get('/unidade', [UnidadeController::class, 'Index']);
Route::post('/unidade/create', [UnidadeController::class, 'Store']);
Route::put('/unidade/{id}', [UnidadeController::class, 'Update']);
Route::get('/unidade/softdelete/{id}', [UnidadeController::class, 'SoftDelete']);


