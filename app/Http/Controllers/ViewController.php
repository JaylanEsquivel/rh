<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ViewController extends Controller {
    public function Exibirindex() {
        return view('index');
    }
}
