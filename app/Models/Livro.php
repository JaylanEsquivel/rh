<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model  {
    protected $table = 'livro';
    protected $primaryKey = 'idlivro';
    public $timestamps = false; 
    
    public function autores() {
        return $this->belongsToMany('App\Models\Autor');
    }
}
