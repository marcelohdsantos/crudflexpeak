<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fornecedor;

use App\Models\Cliente;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fornecedores = Fornecedor::all(); //trazendo todos os eventos do banco.
        $clientes = Cliente::all(); //trazendo todos os eventos do banco.

        $soma_fornecedores = DB::table('fornecedores')->sum('valor');
        $soma_clientes = DB::table('clientes')->sum('valor');

        return view('index', ['fornecedores' => $fornecedores, 'soma_fornecedores'=>$soma_fornecedores, 'soma_clientes'=>$soma_clientes]);
    }
}
