@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Categoria</h1>
        <div>
            <form action="{{url('/categoria/inserir')}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text" name="txCategoria" placeholder="Insira uma categoria" value=""/>
        </div>

        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

</form>

        </div>
            @foreach($categoria as $cat)
            <div class="space">
            <h2 > Id Categoria: {{$cat->idCategoria}} </h2>
            <p> Categoria: {{$cat->categoria}} </p>
            <a href="/categoria/{{$cat->idCategoria}}"> <img src="{!! asset('img/lixeira.png')!!}" class="lixeira" /> </a>
            <a href="/categoria-editar/{{$cat->idCategoria}}/editar"> <img src="{!! asset('img/lapis.png')!!}" class="lapis" /> </a>

        </div>
            @endforeach
        </div>
    </section>

    @endsection