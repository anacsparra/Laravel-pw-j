<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="{{url('css/styles.css')}}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Projeto PWIII</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li class="menu"><a  href= "/"><li>Home</li></a>
                <li class="menu"><a  href= "/contato"><li>Contato</li></a>
                <li class="menu"><a  href= "/categoria"><li>Categoria</li></a>
                <li class="menu"><a  href= "/cliente"><li>Cliente</li></a>
                <li class="menu"><a  href= "/produto"><li>Produto</li></a>
                <li class="menu"><a  href= "/pedido"><li>Pedido</li></a>
            </ul>
    </nav>
</div>
    <!--- yield  é aproveitada -->
    @yield('content')
    <footer class="footer">
        <p>Todos os direitos reservados - 2022
            <br>
                ETEC Camargo Aranha
        </p>
    </footer>
</body>
</html>