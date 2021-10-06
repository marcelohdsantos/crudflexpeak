<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                
        $fornecedores = Fornecedor::all(); //trazendo todos os eventos do banco.

        $soma_fornecedores = DB::table('fornecedores')->sum('valor');
        
        return view('fornecedores.index', ['fornecedores' => $fornecedores, 'soma_fornecedores'=> $soma_fornecedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fornecedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fornecedor = new Fornecedor;

        $fornecedor->nome = $request->nome;
        $fornecedor->descricao = $request->descricao;
        $fornecedor->date = $request->date;
        $fornecedor->valor = $request->valor;

        $fornecedor->save();

        return redirect('fornecedores.index')->with('msg', 'Entrada criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    // public function show(Fornecedor $fornecedor)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);

        return view('fornecedores.edit', ['fornecedor' => $fornecedor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedor $fornecedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fornecedor::findOrFail($id)->delete();
        return view('fornecedores.index')->with('msg', 'Entrada Excluída com sucesso!');
    }
}
