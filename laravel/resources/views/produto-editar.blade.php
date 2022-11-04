@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Produto</h1>
        <div>
            <form action="{{url('/produto-alterar/'. $Produto->idProduto)}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text" name="txIdCategoria"
            placeholder="Insira o ID da categoria" value="{{$Produto->idCategoria}}"/>
        </div>        
        <div class="espaco">
            <input  class="form-control" type="text" name="txProduto"
            placeholder="Insira um produto" value="{{$Produto->produto}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txValor"
            placeholder="Insira o valor" value="{{$Produto->valor}}"/>
        </div>
        <div class="espaco-but">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

        </section>
    @endsection