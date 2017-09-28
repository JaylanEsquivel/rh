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
        $funcionario = Funcionario::all();
        return view('funcionario-gerenciar', ['funcionarios' => $funcionario ]);
    }
    public function EditarFuncionario($id) {
        $cargos = Cargo::all();
        $func = Funcionario::find($id);
        return view('editarfuncionario', ['funcionarios' => $func, 'cargos' => $cargos]);        
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
        $novo->cargo_id = $cargo;
        
        $novo->save();
        
        return redirect('/funcionario');
        
    }
    public function UpdateFuncionario($id) {
        $novo = Funcionario::find($id);
        
        $input = \Request::all();
        $nome = $input['nomeFunc'];
        $cpf = $input['cpf'];
        $salario = $input['sal'];
        $data = $input['dataent'];
        $cargo = $input['cargo'];
        
        $novo->nome = $nome;
        $novo->cpf = $cpf;
        $novo->salario = $salario;
        $novo->datadeentrada = $data;
        $novo->cargo_id = $cargo;
        
        $novo->save();
        
        return redirect('/funcionario');
        
    }
    public function Deletarfuncionario($id) {
        $funcionario = Funcionario::find($id);
        
        $funcionario->delete();      
        return redirect('/funcionario-gerenciar');
    }
    
    
}
