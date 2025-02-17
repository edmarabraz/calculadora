<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/soma/{p1}/{p2}', [App\Http\Controllers\OperacoesController::class, 'soma'])->name('site.operacoes');
Route::get('/subtracao/{p1}/{p2}', [App\Http\Controllers\OperacoesController::class, 'subtracao'])->name('site.operacoes');
Route::get('/multi/{p1}/{p2}', [App\Http\Controllers\OperacoesController::class, 'multi'])->name('site.operacoes');
Route::get('/divisao/{p1}/{p2}', [App\Http\Controllers\OperacoesController::class, 'divisao'])->name('site.operacoes');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'"> Clique aqui para voltar </a>';
});