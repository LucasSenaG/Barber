<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
    <link rel="shortcut icon" href="{{ asset('img/icon/icon-barber.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('img/icon/barbearia.png') }}" alt="Logo Barbearia">
        <div id="menu">
            <a href="/#unidades"><h3>Unidades</h3></a>
            <a href="/#sobre"><h3>Sobre</h3></a>
            <a href="/produtos" target="_blank"><h3>Produtos</h3></a>
            <a href="/#servicos"><h3>Serviços</h3></a>
            <a href="/#agendamento"><h3>Agendar</h3></a>
        </div>
        <div class="social">
            <a href="https://www.facebook.com" target="_blank"><img src="{{ asset('img/icon/fb-removebg-preview.png') }}" alt="Facebook"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="{{ asset('img/icon/insta.png') }}" alt="Instagram"></a>
            <a href="https://web.whatsapp.com" target="_blank"><img src="{{ asset('img/icon/wpp.png') }}" alt="Whatsapp"></a>
        </div>
    </header>
    <div id="confirmacao">
        <p><span>{{ $request->nome }}</span>, o seu atendimento foi agendado para o dia {{ $data }} às {{ $request->hora }}.</p>    
        <img src="https://cdn-icons-png.flaticon.com/512/4436/4436481.png" alt="Check">
        <p>Esperamos por você!</p>
        <p>{{ var_dump($databd) }}</p>
    </div>
</body>
</html>