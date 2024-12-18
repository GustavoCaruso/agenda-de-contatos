<?php

use App\Http\Controllers\ContatosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Rotas de Contatos
Route::get('/contatos', [ContatosController::class, 'index'])->name('contatos.index');
Route::delete('/contatos/{idUser}', [ContatosController::class, 'delete'])->name('contatos.delete');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
