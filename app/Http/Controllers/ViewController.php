<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Autor;
use App\Models\Livro;

class ViewController extends Controller {
    public function Exibirindex() {
        return view('index');
    }
    public function ExibirFuncionario() {
        return view('funcionario');
    }
    public function ExibirFuncionarioGerenciar() {
        return view('funcionario-gerenciar');
    }
    public function ExibirSetor() {
        return view('setor');
    }
    public function ExibirSetorGerenciar() {
        return view('setor-gerenciar');
    }
    public function ExibirCargo() {
        return view('cargo');
    }
    public function ExibirCargoGerenciar() {
        return view('cargo-gerenciar');
    }
    public function ExibirRescisao() {
        return view('rescisao');
    }
    public function ExibirRescisaoGerenciar() {
        return view('rescisao-gerenciar');
    }
}
