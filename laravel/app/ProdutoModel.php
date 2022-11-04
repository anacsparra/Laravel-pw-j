<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = "tbProduto";
    protected $fillable = ['idProduto','idCategoria','produto','valor'];
    protected $primaryKey = 'idProduto';
    public $timestamps = false;


    
    /* não sei oq é, mas tava no codg dele
    protected $casts = ['items' => 'array'];*/
}
