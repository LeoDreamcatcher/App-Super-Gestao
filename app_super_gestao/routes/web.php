<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal']) -> name('site-principal');

Route::get('/sobre-nos', [SobreNosController::class, 'principal']) -> name('site-sobre-nos');

Route::get('/contato', [ContatoController::class, 'principal']) -> name('site-contato');