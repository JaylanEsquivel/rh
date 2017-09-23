<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Models\Cargo;

class CargoController extends Controller{

    public function ExibirCargo() {
        $setores = Setor::all();
        return view('cargo', ['setores' => $setores]);
    }
    public function ExibirCargoGerenciar() {
        return view('cargo-gerenciar');
    }
    public function CadastrarCargo() {
        
    }
}
