<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',          [PageController::class, 'home'])->name('home');
Route::get('/erp',       [PageController::class, 'erp'])->name('erp');
Route::get('/fdv',       [PageController::class, 'fdv'])->name('fdv');
Route::get('/ecommerce', [PageController::class, 'ecommerce'])->name('ecommerce');
Route::get('/sobre',     [PageController::class, 'sobre'])->name('sobre');
Route::get('/demo',      [PageController::class, 'demo'])->name('demo');
Route::get('/contato',   [PageController::class, 'contato'])->name('contato');

Route::post('/demo',    [PageController::class, 'storeDemoLead'])->name('demo.store');
Route::post('/contato', [PageController::class, 'storeContato'])->name('contato.store');
