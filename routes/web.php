<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VeiculoController;
use App\Models\Veiculo; // <--- 1. IMPORTANTE: Isso estava faltando
use Illuminate\Support\Facades\Route;

// --- ROTA DA PÁGINA INICIAL (CORRIGIDA) ---
Route::get('/', function () {
    // 2. Busca os carros no banco
    $veiculos = Veiculo::all();
    
    // 3. Envia a variável $veiculos para a view
    return view('welcome', ['veiculos' => $veiculos]);
});

// --- RESTO DO ARQUIVO (MANTENHA IGUAL) ---
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('admin/veiculos', VeiculoController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';