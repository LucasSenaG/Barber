<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1802/1802367.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <div id="menu">
        <img src="https://cdn-icons-png.flaticon.com/512/8354/8354108.png" alt="icon">
        <h3>BARBEARIA PILOTO</h3>
        <a href="/adminagenda"><div class="row"><img src="https://cdn-icons-png.flaticon.com/512/7092/7092001.png"><p>Agenda</p></div></a>
        <a href="/admindefinicoes"><div class="row"><img src="https://cdn-icons-png.flaticon.com/512/6528/6528734.png"><p>Definiçõs</p></div></a>
        <a href="/adminprodutos"><div class="row"><img src="https://cdn-icons-png.flaticon.com/512/5575/5575882.png"><p>Produtos</p></div></a>
        <a href="/adminvalores"><div class="row"><img src="https://cdn-icons-png.flaticon.com/512/2460/2460475.png"><p>Valores</p></div></a>
        <a href="/adminpontos"><div class="row"><img src="https://cdn-icons-png.flaticon.com/512/1240/1240416.png"><p>Pontos</p></div></a>
        <hr>
        <div id="traco"></div>
    </div>
    <div id="conteudo">
        @yield('conteudoadmin')
    </div>
</body>
</html>