<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Autor;
use App\Models\Livro;



class ViewController extends Controller {
    public function Exibirindex() {
        return view('index');
    }
    public function mostraMuitos() {
        
    }
}
