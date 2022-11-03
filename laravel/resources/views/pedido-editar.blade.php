@extends('template.default')
    @section('content')
    <section>
    <h1 class="titulo">Pedido</h1>
    <div>
            <form action="{{url('/pedido-alterar/'. $Pedido->idPedido)}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="IdCategoria" name="txIdcategoria" value="Insira o ID da categoria"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="IdProduto" name="txIdproduto" value="Insira o ID do produto"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Valor total da compra" name="txValor" value="Insira o valor"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

        </section>

@endsection