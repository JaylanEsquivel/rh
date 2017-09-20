<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Funcionario {
    protected $table = 'funcionario';
    protected $primarykey = 'idfuncionario';
    public    $timestamps = false;
    
    public function funcionario() {
          return $this->belongsToMany('App\Models\Autor');
    }
}
