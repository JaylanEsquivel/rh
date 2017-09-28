<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use App\Models\Setor;
use App\Models\Cargo;
use App\Models\Rescisao;

class ViewController extends Controller {
    public function Exibirindex() {
        return view('index');
    }
    public function Exibirprincipal() {
        $countset = Setor::all()->count();
        $countcargo = Cargo::all()->count();
        $countfunc = Funcionario::all()->count();
        $countresc = Rescisao::all()->count();
        return view('principal', ['set' => $countset, 'car' => $countcargo, 'func' => $countfunc, 'resc' => $countresc]);
    }
}
