<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cargo {
    protected $table = 'cargo';
    protected $primarykey = 'idcargo';
    public    $timestamps = false;
    
    public function cargo() {
          return $this->belongsToMany('App\Models\Autor');
    }
}
