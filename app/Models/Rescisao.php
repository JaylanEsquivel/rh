<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Rescisao extends Model {
    protected $table = 'rescisao';
    public    $timestamps = false;
    
    public function rescisao() {
          return $this->belongsToMany('App\Models\Autor');
    }
}
