@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Categoria</h1>
        <div>
            <form action="{{url('/categoria-alterar/'. $Categoria->idCategoria)}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text" name="txCategoria"
            placeholder="Insira uma categoria" value="{{$Categoria->categoria}}"/>
        </div>

        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>
</div>
    </section>

    @endsection