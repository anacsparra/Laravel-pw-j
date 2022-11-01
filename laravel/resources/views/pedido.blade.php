@extends('template.default')
    @section('content')
    <section>
    <h1 class="titulo">Pedido</h1>
    <div>
            <form action="{{url('/pedido/inserir')}}" method="post">
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

        </form>
        </div>
        <ul class="teste">
            @foreach($pedido as $pe)
            <li class="space">
            <h1> IdPedido: {{$pe->idPedido}} </h1>
            <p> IdCategoria:{{$pe->idCategoria}} </p>
            <p> IdProduto: {{$pe->idProduto}} </p>
            <p> Valor total: {{$pe->valor_t}} </p>
            <a href="/pedido/{{$pe->idPedido}}"> <img src="{!! asset('img/lixeira.png')!!}" class="lixeira" /> </a>
            <a href="/pedido-editar/{{$pe->idPedido}}/editar"> Editar</a>
</li>
            @endforeach
        </ul>
    </section>

    @endsection