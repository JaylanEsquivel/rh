<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model {
    protected $table = 'cargo';
    protected $primarykey = 'idcargo';
    public    $timestamps = false;
    
    public function funcionario() {
          return $this->hasMany('App\Models\Funcionario');
    }
}
