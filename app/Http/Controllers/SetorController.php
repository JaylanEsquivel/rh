<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Setor;

class SetorController extends Controller {

    public function ExibirSetor() {
        return view('setor');
    }
    public function ExibirSetorGerenciar() {
        $setor = Setor::all();
        return view('setor-gerenciar', ['setores' => $setor ]);
    }
    public function CadastrarSetor() {
      $setor = \Request::input('setor');
      
      $novo = new Setor;
      $novo->nomeSetor = $setor;
      $novo->save();
      
      return redirect('/setor') ;
    }
    public function EditarSetor($id) {
        $setor = Setor::find($id);
        return view('editarsetor', ['setores' => $setor]);        
    }
    public function DeletarSetor($id) {
        $setor = Setor::find($id);
        
        $setor->delete();      
        return redirect('/setor-gerenciar');
    }
    public function UpdateSetor($id) {
        $setor = Setor::find($id);
        
        $nome = \Request::input('setor');
        
        $setor->nomeSetor = $nome;
        
        $setor->save();
        
        return redirect('\setor-gerenciar');
    }
}
