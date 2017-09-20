<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Setor {
    protected $table = 'setor';
    protected $primarykey = 'idsetor';
    public    $timestamps = false;
    
    public function setor() {
          return $this->belongsToMany('App\Models\Autor');
    }
}
