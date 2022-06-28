<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ClubeController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\TorcedorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('/clubes')->middleware(['auth'])->name('clube.')->group( function(){
    Route::get('/', [ClubeController::class, 'index'])->name('index');
    Route::get('/create', [ClubeController::class, 'create'])->name('create');
    Route::post('/', [ClubeController::class, 'store'])->name('store');
    Route::put('/{id}', [ClubeController::class, 'update'])->name('update');
    Route::delete('/{id}', [ClubeController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [ClubeController::class, 'edit'])->name('edit');
});

Route::prefix('/times')->middleware(['auth'])->name('time.')->group( function(){
    Route::get('/', [TimeController::class, 'index'])->name('index');
    Route::get('/create', [TimeController::class, 'create'])->name('create');
    Route::post('/', [TimeController::class, 'store'])->name('store');
    Route::put('/{id}', [TimeController::class, 'update'])->name('update');
    Route::delete('/{id}', [TimeController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [TimeController::class, 'edit'])->name('edit');
});
Route::prefix('/cidades')->middleware(['auth'])->name('cidade.')->group( function(){
    Route::get('/', [CidadeController::class, 'index'])->name('index');
    Route::get('/create', [CidadeController::class, 'create'])->name('create');
    Route::post('/', [CidadeController::class, 'store'])->name('store');
    Route::put('/{id}', [CidadeController::class, 'update'])->name('update');
    Route::delete('/{id}', [CidadeController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [CidadeController::class, 'edit'])->name('edit');
});
Route::prefix('/torcedores')->middleware(['auth'])->name('torcedor.')->group( function(){
    Route::get('/', [TorcedorController::class, 'index'])->name('index');
    Route::get('/create', [TorcedorController::class, 'create'])->name('create');
    Route::post('/', [TorcedorController::class, 'store'])->name('store');
    Route::put('/{id}', [TorcedorController::class, 'update'])->name('update');
    Route::delete('/{id}', [TorcedorController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [TorcedorController::class, 'edit'])->name('edit');
});



require __DIR__.'/auth.php';
