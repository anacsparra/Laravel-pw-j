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

        <?php /* TESTE DE BUSCA POR PRODUTOS*/  ?>
        <div class="espaco">
        <h1 class="titulo">Busque por um produto</h1>
        <form action="/produto" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </div>
            <div class="espaco-but">
                <input class="btn btn-danger" type="submit" placeholder="Salvar"/>
            </div>
</form>
<div>
         
    
        <?php /*

        <div class="espaco">
        <h1 class="titulo">Busque um produto pelo valor</h1>
        <form action="/produto" method="GET">
            <input type="text" id="searchi" name="searchi" class="form-control" placeholder="Valor inicial">
        </div>
        <div class="espaco">
            <input type="text" id="searchf" name="searchf" class="form-control" placeholder="Valor final">
        </div>
        
            <div class="espaco-but">
                <input class="btn btn-danger" type="submit" placeholder="Salvar"/>
            </div>
        </form>

        

        <div>
         @if($searchi && $searchf)
        <h1 class="titulo">Buscando por: {{ $searchi }} & {{ $searchf }}</h1>
        @elseif($search)
        <h1 class="titulo">Buscando por: {{ $search }}</h1>
        @else 
        <h1 class="titulo">Produtos disponíveis:</h1>
        @endif

        */ ?>
      

        <div class="linha-space">
            @foreach($produto as $p)
            <div class="space">
            <h1> IdProduto: {{$p->idProduto}} </h1>
            <p> IdCategoria: {{$p->idCategoria}} </p>
            <p> Produto: {{$p->produto}} </p>
            <p> Valor: {{$p->valor}} </p>
            <a href="/produto/{{$p->idProduto}}"> <img src="{!! asset('img/lixeira.png')!!}" class="lixeira" /></a>
            <a href="/produto-editar/{{$p->idProduto}}/editar">  <img src="{!! asset('img/lapis.png')!!}" class="lapis" /> </a>
</div>
            @endforeach
        </div>
    </section>


    <?php //continuação do teste?>
        @if(count($produto) == 0 && $search)
            <p>Não foi possível encontrar nenhum produto com {{ $search }}! <a href="/produto">Ver todos</a></p>
            <?php /*@elseif(count($produto) == 0 && $searchi && $searchf)
            <p>Não foi possível encontrar nenhum produto entre {{ $searchi }} & {{ $searchf }} reais! <a href="/produto">Ver todos</a></p>   */ ?>
        @elseif(count($produto) == 0)
            <p>Não há produtos disponíveis</p>
        @endif

        <?php/* final c link do repositório:
        https://github.com/matheusbattisti/curso_laravel/blob/Aula_21/app/Http/Controllers/EventController.php */?>

@endsection

