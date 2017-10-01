<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Rescisao;
use App\Models\Funcionario;

class RescisaoController extends Controller {

    public function calcularRescisao($id) {
        $func = Funcionario::find($id);
        return view('rescisao', ['func' => $func ]);
    }
    public function ExibirRescisaoGerenciar() {
        return view('rescisao-gerenciar');
    }
    public function RegistrarRescisao() {
        
    }
    public function Calculardias() {
        
    }
    public function visualizaRescisao() {
        
    }
}
