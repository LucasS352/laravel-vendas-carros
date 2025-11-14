<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    // 1. Listar
    public function index()
    {
        $veiculos = Veiculo::all();
        return view('admin.veiculos.index', ['veiculos' => $veiculos]);
    }

    // 2. Formulário de Criar
    public function create()
    {
        return view('admin.veiculos.create');
    }

    // 3. Salvar (CORRIGIDO)
    public function store(Request $request)
    {
        // A validação agora retorna os dados limpos (sem o _token)
        $dados = $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'cor' => 'required',
            'ano' => 'required|integer',
            'quilometragem' => 'required|numeric',
            'valor' => 'required|numeric',
            'foto1' => 'required|url',
            'foto2' => 'required|url',
            'foto3' => 'required|url',
            // Campos opcionais precisam estar aqui para passarem no filtro
            'descricao' => 'nullable', 
            'foto4' => 'nullable|url',
            'foto5' => 'nullable|url',
        ]);

        // Agora criamos usando apenas os dados limpos
        Veiculo::create($dados);

        return redirect()->route('veiculos.index')->with('success', 'Veículo cadastrado!');
    }

    // 4. Formulário de Editar
    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('admin.veiculos.edit', ['veiculo' => $veiculo]);
    }

    // 5. Atualizar (CORRIGIDO)
    public function update(Request $request, $id)
    {
        // Mesma lógica: validar e pegar apenas os dados úteis
        $dados = $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'cor' => 'required',
            'ano' => 'required|integer',
            'quilometragem' => 'required|numeric',
            'valor' => 'required|numeric',
            'foto1' => 'required|url',
            'foto2' => 'required|url',
            'foto3' => 'required|url',
            'descricao' => 'nullable',
            'foto4' => 'nullable|url',
            'foto5' => 'nullable|url',
        ]);

        $veiculo = Veiculo::findOrFail($id);
        
        // Atualiza apenas com os dados validados
        $veiculo->update($dados);

        return redirect()->route('veiculos.index')->with('success', 'Veículo atualizado!');
    }

    // 6. Excluir
    public function destroy($id)
    {
        Veiculo::findOrFail($id)->delete();
        return redirect()->route('veiculos.index')->with('success', 'Veículo excluído!');
    }
}