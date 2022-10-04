@extends('template.default')
    @section('content')
    <section class="pagina">
    <h1 class="titulo">Contato</h1>
        <div>
            <form action="{{url('/contato/inserir')}}" method="post">
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

            </form>
        </div>
            @foreach($contato as $c)
            <div class="space">
            <h1> Id : {{$c->idContato}} </h1>
            <p> Nome: {{$c->nome}} </p>
            <p> Email: {{$c->email}} </p>
            <p> Telefone:{{$c->fone}} </p>
            <p> Assunto: {{$c->assunto}} </p>
            <p> Mensagem: {{$c->mensagem}} </p>
            <a href="/contato/{{$c->idContato}}"> <img src="{!! asset('img/lixeira.png')!!}" class="lixeira" /> </a>
            </div>

    
            @endforeach
        
    </section>

    @endsection