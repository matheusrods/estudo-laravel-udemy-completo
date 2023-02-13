<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        // comentario para testar pc mapa

        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0'
            ],
            1 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => null
            ],
        ];

        /*
        condicao ? se verdade : se falso;
        condicao ? se verdade : (condicao ? se verdade : se falso);
        */

        $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ nao informado';
        echo $msg;
        
        return view('app.fornecedor.index', compact('fornecedores'));
        // return view('app.fornecedor.index');
    }
}
