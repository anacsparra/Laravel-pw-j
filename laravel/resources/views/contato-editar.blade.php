@extends('template.default')
    @section('content')
    <section class="pagina">
    <h1 class="titulo">Contato</h1>
        <div>
            <form action="{{url('/contato-alterar/'. $Contato->idContato)}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text"
            name="txNome" placeholder="Insira seu nome"value="{{$Contato->nome}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="email"
            name="txEmail" placeholder="Insira seu email"value="{{$Contato->email}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text"
            name="txFone" placeholder="Insira seu Telefone"value="{{$Contato->fone}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="textarea"
            name="txAssunto" placeholder="Insira seu assunto"value="{{$Contato->assunto}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text"
            name="txMensagem" placeholder="Insira sua mensagem"value="{{$Contato->mensagem}}"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

        </section>

@endsection