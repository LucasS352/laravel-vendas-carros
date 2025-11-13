<?php

namespace App\Http\Controllers;

use App\Models\Veiculo; // <--- OBRIGATÓRIO: Importar o Model
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Exibe a lista de veículos (Admin).
     */
    public function index()
    {
        $veiculos = Veiculo::all();
        return view('admin.veiculos.index', ['veiculos' => $veiculos]);
    }

    /**
     * Mostra o formulário de cadastro.
     */
    public function create()
    {
        return view('admin.veiculos.create');
    }

    /**
     * Salva o novo veículo no banco.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'cor' => 'required',
            'ano' => 'required|integer',
            'quilometragem' => 'required',
            'valor' => 'required',
            'foto1' => 'required',
            'foto2' => 'required',
            'foto3' => 'required',
        ]);

        // === LIMPEZA DOS VALORES (A MÁGICA ACONTECE AQUI) ===
        
        // 1. Pega o valor bruto (ex: "R$ 101.090,00")
        $valorBruto = $request->input('valor');
        // 2. Remove "R$", pontos de milhar e espaços
        $valorLimpo = str_replace(['R$', '.', ' '], '', $valorBruto); // Fica "101090,00"
        // 3. Troca a vírgula decimal por ponto
        $valorFinal = str_replace(',', '.', $valorLimpo); // Fica "101090.00" (Perfeito pro banco)

        // Fazemos o mesmo para a quilometragem (caso tenha ponto de milhar)
        $kmBruto = $request->input('quilometragem');
        $kmLimpo = str_replace(['.', ' '], '', $kmBruto);
        $kmFinal = str_replace(',', '.', $kmLimpo);

        // === SALVAR NO BANCO ===
        $veiculo = new Veiculo();
        
        $veiculo->marca = $request->input('marca');
        $veiculo->modelo = $request->input('modelo');
        $veiculo->cor = $request->input('cor');
        $veiculo->ano = $request->input('ano');
        
        // Usamos os valores limpos aqui
        $veiculo->quilometragem = $kmFinal; 
        $veiculo->valor = $valorFinal;
        
        $veiculo->descricao = $request->input('descricao');
        $veiculo->foto1 = $request->input('foto1');
        $veiculo->foto2 = $request->input('foto2');
        $veiculo->foto3 = $request->input('foto3');
        $veiculo->foto4 = $request->input('foto4');
        $veiculo->foto5 = $request->input('foto5');
        
        $veiculo->save();

        return redirect()->route('veiculos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 1. Busca o veículo pelo ID (ou dá erro se não achar)
        $veiculo = Veiculo::findOrFail($id);

        // 2. Deleta do banco de dados
        $veiculo->delete();

        // 3. Redireciona de volta para a lista
        return redirect()->route('veiculos.index');
    }