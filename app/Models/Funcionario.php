<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model {
    protected $table = 'funcionario';
    public    $timestamps = false;
    
    public function rescisao() {
          return $this->hasMany('App\Models\Rescisao');
    }
    public function cargo() {
        return $this->belongsTo('App\Models\Cargo');        
    }
}
