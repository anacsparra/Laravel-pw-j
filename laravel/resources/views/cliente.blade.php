@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Cliente</h1>
        <div>
            <form action="{{url('/cliente/inserir')}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text"  name="txNome" 
            placeholder="Insira seu nome"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txData" 
            placeholder="Insira sua data de nasc - escreva em XXXX-XX-XX"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text"  name="txCiv" 
            placeholder="Insira seu Estado Civil"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="textarea"  name="txEnd" 
            placeholder="Insira seu endereço"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number"  name="txNum" 
            placeholder="Insira seu número"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text"  name="txCom" 
            placeholder="Insira seu complemento"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" name="txCEP" 
            placeholder="Insira seu CEP"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txCid" 
            placeholder="Insira cidade"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txEst" 
            placeholder="Insira estado"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txRG" 
            placeholder="Insira seu RG"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number"  name="txCPF" 
            placeholder="Insira seu CPF"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="email" name="txEmail"
            placeholder="Insira seu email"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txTel"
            placeholder="Insira seu telefone"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text"name="txCel"
            placeholder="Insira seu celular"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>

            </form>
        </div>
                @foreach($cliente as $cli)
                <div class="space">
                <h1> IdCliente: {{$cli->idCliente}} </h1>
                <p> Nome: {{$cli->nome}} </p>
                <p> Data de Nascimento: {{$cli->dtNasc}} </p>
                <p> Estado Civil: {{$cli->estadoCivil}} </p>
                <p> Endereço: {{$cli->endereco}} </p>
                <p> Número: {{$cli->numero}} </p>
                <p> Complemento: {{$cli->complemento}} </p>
                <p> CEP: {{$cli->cep}} </p>
                <p> Cidade: {{$cli->cidade}} </p>
                <p> Estado: {{$cli->estado}} </p>
                <p> RG: {{$cli->Rg}} </p>
                <p> CPF: {{$cli->cpf}} </p>
                <p> Email: {{$cli->email}} </p>
                <p> Telefone: {{$cli->fone}} </p>
                <p> Celular: {{$cli->celular}} </p>
                <a href="/cliente/{{$cli->idCliente}}"> <img src="{!! asset('img/lixeira.png')!!}" class="lixeira" /> </a>
                <a href="/cliente-editar/{{$cli->idCliente}}/editar"> <img src="{!! asset('img/lapis.png')!!}" class="lapis" /> </a>

                </div>
                @endforeach
        
    </section>

    @endsection