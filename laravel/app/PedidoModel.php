<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $table = "tbPedido";
    protected $fillable = ['idPedido','idCategoria','idProduto','valor_t'];
    protected $primaryKey = 'idPedido';
    public $timestamps = false;
}
