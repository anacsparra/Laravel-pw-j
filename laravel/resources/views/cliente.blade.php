@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Cliente</h1>
        <div>
            <form action="{{url('/cliente/inserir')}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Nome" name="txNome" value="Insira seu nome"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Data de nascimento" name="txData" value="Insira sua data de nasc - escreva em XXXX-XX-XX"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="EstadoCiv" name="txCiv" value="Insira seu Estado Civil"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="textarea" placeholder="Endereço" name="txEnd" value="Insira seu endereço"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" placeholder="Número" name="txNum" value="Insira seu número"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Complemento" name="txCom" value="Insira seu complemento"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" placeholder="CEP" name="txCEP" value="Insira seu CEP"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Cidade" name="txCid" value="Insira cidade"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Estado" name="txEst" value="Insira estado"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="RG" name="txRG" value="Insira seu RG"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" placeholder="CPF" name="txCPF" value="Insira seu CPF"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="email" placeholder="Email" name="txEmail" value="Insira seu email"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Telefone" name="txTel" value="Insira seu telefone"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" placeholder="Celular" name="txCel" value="Insira seu celular"/>
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