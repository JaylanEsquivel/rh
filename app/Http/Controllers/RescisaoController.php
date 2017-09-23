<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Models\Rescisao;

class RescisaoController extends Controller {

    public function ExibirRescisao() {
        return view('rescisao');
    }
    public function ExibirRescisaoGerenciar() {
        return view('rescisao-gerenciar');
    }
    public function RegistrarRescisao() {
        
    }
}
