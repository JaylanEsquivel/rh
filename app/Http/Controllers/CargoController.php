<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Cargo;
use App\Models\Setor;


class CargoController extends Controller{

    public function ExibirCargo() {
        $setores = Setor::all();
        return view('cargo', ['setores' => $setores]);
    }
    public function ExibirCargoGerenciar() {
        $cargo = Cargo::all();
        return view('cargo-gerenciar', ['cargos' => $cargo]);
    }
    public function CadastrarCargo() {
        $nomecargo = \Request::input('nomeCargo');
        $setorid = \Request::input('setorid');
        
        $novo = new Cargo;
        $novo->nomeCargo = $nomecargo;
        $novo->setor_idsetor = $setorid;
        $novo->save();
        
        return redirect('/cargo');
    }
    public function EditarCargo($id) {
        $cargo = Cargo::find($id);
        return view('editarcargo', ['cargos' => $cargo]);        
    }
    public function DeletarCargo(){
        
    }
}
