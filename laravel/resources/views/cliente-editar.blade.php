@extends('template.default')
    @section('content')
    <section>
        <h1 class="titulo">Cliente</h1>
        <div>
            <form action="{{url('/cliente-alterar/'. $Cliente->idCliente)}}" method="post">
            {{csrf_field()}}
        <div class="espaco">
            <input  class="form-control" type="text" name="txNome" placeholder="Insira seu nome" value="{{$Cliente->nome}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text"  name="txData"
            placeholder="Insira sua data de nasc - escreva em XXXX-XX-XX" value="{{$Cliente->dtNasc}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txCiv"
            placeholder="Insira seu Estado Civil" value="{{$Cliente->estadoCivil}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="textarea" name="txEnd"
            placeholder="Insira seu endereço" value="{{$Cliente->endereco}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" name="txNum" 
            placeholder="Insira seu número" value="{{$Cliente->numero}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txCom" 
            placeholder="Insira seu complemento" value="{{$Cliente->complemento}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" name="txCEP" 
            placeholder="Insira seu CEP" value="{{$Cliente->cep}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txCid" 
            placeholder="Insira cidade" value="{{$Cliente->cidade}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txEst" 
            placeholder="Insira estado" value="{{$Cliente->estado}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txRG" 
            placeholder="Insira seu RG" value="{{$Cliente->Rg}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="number" name="txCPF" 
            placeholder="Insira seu CPF" value="{{$Cliente->cpf}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="email" name="txEmail" 
            placeholder="Insira seu email" value="{{$Cliente->email}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txTel" 
            placeholder="Insira seu telefone" value="{{$Cliente->fone}}"/>
        </div>
        <div class="espaco">
            <input  class="form-control" type="text" name="txCel" 
            placeholder="Insira seu celular" value="{{$Cliente->celular}}"/>
        </div>
        <div class="espaco">
            <input class="btn btn-danger" type="submit" value="Salvar"/>
        </div>


           
    </section>

@endsection