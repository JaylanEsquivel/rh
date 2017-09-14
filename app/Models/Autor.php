<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model {
    protected $table = 'autor';
    protected $primaryKey = 'idautor';
    public $timestamps = false; 
    
    public function livros() {
        return $this->belongsToMany('App\Models\livro');
    }
}
