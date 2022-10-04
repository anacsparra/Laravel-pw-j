@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Produto</h1>
        <div>
            <form action="{{url('/produto/inserir')}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text" name="txIdCategoria" placeholder="Insira o ID da categoria"/>
        </div>        
        <div class="espaco">
            <input  class="form-control" type="text" name="txProduto" placeholder="Insira um produto"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txValor" placeholder="Insira o valor"/>
        </div>
        <div class="espaco-but">
            <input class="btn btn-danger" type="submit" placeholder="Salvar"/>
        </div>

            </form>
        </div>
        <div class="linha-space">
            @foreach($produto as $p)
            <div class="space">
            <h1> IdProduto: {{$p->idProduto}} </h1>
            <p> IdCategoria: {{$p->idCategoria}} </p>
            <p> Produto: {{$p->produto}} </p>
            <p> Valor: {{$p->valor}} </p>
            <a href="/produto/{{$p->idProduto}}"> <img src="{!! asset('img/lixeira.png')!!}" class="lixeira" /></a>
            </div>
            @endforeach
        </div>
    </section>
    @endsection