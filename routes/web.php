<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VeiculoController;
use App\Models\Veiculo;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;

//Rotas Públicas (loja-vitrine)


Route::get('/', function (Request $request) {
    // Inicia a busca (ainda não busca no banco)
    $query = Veiculo::query();

    
        //Filtro por Busca (Marca ou Modelo)
    if ($request->filled('busca')) {
        $query->where(function($q) use ($request) {
            $q->where('marca', 'like', '%' . $request->busca . '%')
                ->orWhere('modelo', 'like', '%' . $request->busca . '%');
        });
    }

    // 2. Filtro por Marca 
    if ($request->filled('marca')) {
        $query->where('marca', $request->marca);
    }

    // 3. Filtro por Cor
    if ($request->filled('cor')) {
        $query->where('cor', $request->cor);
    }
    

    // busca os veículos filtrados
    $veiculos = $query->get();

    // Busca dados para preencher os filtros 
    $marcas = Veiculo::distinct()->orderBy('marca', 'asc')->pluck('marca');
    $cores = Veiculo::distinct()->orderBy('cor', 'asc')->pluck('cor');

    // Retorna a view, passando os veículos E os dados dos filtros
    return view('welcome', [
        'veiculos' => $veiculos,
        'marcas' => $marcas,
        'cores' => $cores,
        'inputs' => $request->all() // Para manter os filtros selecionados
    ]);

})->name('home');

// Rota da Página de Detalhes (continua igual)
Route::get('/veiculo/{id}', function ($id) {
    $veiculo = Veiculo::findOrFail($id);
    return view('detalhes', ['veiculo' => $veiculo]);
})->name('veiculo.detalhes');


// Rotas do Admin (Protegidas por Login)

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('admin/veiculos', VeiculoController::class)
        ->names('veiculos'); 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';