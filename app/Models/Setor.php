<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model {
    protected $table = 'setor';
    protected $primaryKey = 'idsetor';
    public    $timestamps = false;
    
    public function cargo() {
          return $this->hasMany('App\Models\Cargo');
    }
}
