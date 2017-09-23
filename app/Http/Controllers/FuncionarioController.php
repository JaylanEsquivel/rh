<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Models\Funcionario;

class FuncionarioController extends Controller {

    public function ExibirFuncionario() {
        return view('funcionario');
    }
    public function ExibirFuncionarioGerenciar() {
        return view('funcionario-gerenciar');
    }
    public function CadastrarFuncionario() {
        
    }
    
    
}
