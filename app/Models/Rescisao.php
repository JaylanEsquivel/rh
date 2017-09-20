<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Rescisao {
    protected $table = 'rescisao';
    protected $primarykey = 'idrescisao';
    public    $timestamps = false;
    
    public function rescisao() {
          return $this->belongsToMany('App\Models\Autor');
    }
}
