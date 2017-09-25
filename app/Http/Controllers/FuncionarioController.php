<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use App\Models\Cargo;
use App\Models\Setor;

class FuncionarioController extends Controller {

    public function ExibirFuncionario() {
        $cargos = Cargo::all();
        return view('funcionario', ['cargos' => $cargos]);
    }
    public function ExibirFuncionarioGerenciar() {
        return view('funcionario-gerenciar');
    }
    public function CadastrarFuncionario() {
        $input = \Request::all();
        $nome = $input['nomeFunc'];
        $cpf = $input['cpf'];
        $salario = $input['sal'];
        $data = $input['dataent'];
        $cargo = $input['cargo'];
        
        $novo = new Funcionario;
        $novo->nome = $nome;
        $novo->cpf = $cpf;
        $novo->salario = $salario;
        $novo->datadeentrada = $data;
        $novo->cargo_idcargo = $cargo;
        
        $novo->save();
        
        return redirect('/funcionario');
        
    }
    
    
}
