<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="{{ asset('css/produtos.css') }}">
    <link rel="shortcut icon" href="{{ asset('https://cdn-icons-png.flaticon.com/512/8258/8258706.png') }}" type="image/x-icon">
</head>
<body>    
    <header id="produtos">
        <img src="{{ asset('img/icon/barbearia.png') }}" alt="Logo Barbearia">
        <textarea name="busca" id="busca" cols="80" rows="1" placeholder="Pesquise por seu produto"></textarea>
        <img src="https://cdn-icons-png.flaticon.com/512/3825/3825056.png" alt="carrinho">
    </header>
    <div class="produtos">
        <div class="container">
            <div class="card">
                <div class="imgBx">
                    <img src="https://d2r9epyceweg5n.cloudfront.net/stores/001/103/540/products/g10-shampoo-para-barba-240ml-500x5001-013946804c2322a57215803023076073-1024-1024.png">
                </div>
                <div class="contentBx">
                    <h2>Hidratante</h2>
                    <!-- <div class="size">
                        <h3>Size :</h3>
                        <span>7</span>
                        <span>8</span>
                        <span>9</span>
                        <span>10</span>
                    </div>
                    <div class="color">
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div> -->
                <a href="#">Comprar</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="imgBx">
                    <img src="https://www.bianchinistore.com.br/imagem/index/28014800/G/minoxidil_kirkland___1_unidade.png">
                </div>
                <div class="contentBx">
                    <h2>Minoxidil</h2>
                    <!-- <div class="size">
                        <h3>Size :</h3>
                        <span>7</span>
                        <span>8</span>
                        <span>9</span>
                        <span>10</span>
                    </div>
                    <div class="color">
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div> -->
                <a href="#">Comprar</a>
                </div>
            </div>
        </div>


    </div>

    
</body>
</html>
