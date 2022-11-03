@extends('template.default')
    @section('content')
    <section>
    <h1 class="titulo">Pedido</h1>
    <div>
            <form action="{{url('/pedido-alterar/'. $Pedido->idPedido)}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text" name="txIdcategoria"
            placeholder="Insira o ID da categoria" value="{{$Pedido->idCategoria}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txIdproduto"
            placeholder="Insira o ID do produto" value="{{$Pedido->idProduto}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txValor"
            placeholder="Insira o valor" value="{{$Pedido->valor_t}}"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

        </section>

@endsection