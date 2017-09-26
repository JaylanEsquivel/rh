<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model {
    protected $table = 'funcionario';
    protected $primaryKey = 'idfuncionario';
    public    $timestamps = false;
    
    public function rescisao() {
          return $this->hasMany('App\Models\Rescisao');
    }
}
