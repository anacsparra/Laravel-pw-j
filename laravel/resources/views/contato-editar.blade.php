@extends('template.default')
    @section('content')
    <section class="pagina">
    <h1 class="titulo">Contato</h1>
        <div>
            <form action="{{url('/contato-alterar/'. $Contato->idContato)}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Nome" name="txNome" value="Insira seu nome"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="email" placeholder="Email" name="txEmail" value="Insira seu email"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Fone" name="txFone" value="Insira seu Telefone"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="textarea" placeholder="Assunto" name="txAssunto" value="Insira seu assunto"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Mensagem" name="txMensagem" value="Insira sua mensagem"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

        </section>

@endsection