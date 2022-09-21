<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piloto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <link rel="shortcut icon" href="{{ asset('img/icon/icon-barber.png') }}" type="image/x-icon">
</head>
<body>
    <header>
        <!-- <a href="/admin"><img src="{{ asset('img/icon/barbearia.png') }}" alt="Logo Barbearia"></a> -->
        <a href="/admin"><img src="https://cdn-icons-png.flaticon.com/512/8354/8354108.png" alt="Logo Barbearia"></a>
        <div id="menu">
            <a href="#unidades"><h3>Unidades</h3></a>
            <a href="#sobre"><h3>Sobre</h3></a>
            <a href="/produtos" target="_blank"><h3>Produtos</h3></a>
            <a href="#servicos"><h3>Serviços</h3></a>
            <a href="#agendamento"><h3>Agendar</h3></a>
        </div>
        <div class="social">
            <a href="https://www.facebook.com" target="_blank"><img src="{{ asset('img/icon/fb-removebg-preview.png') }}" alt="Facebook"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="{{ asset('img/icon/insta.png') }}" alt="Instagram"></a>
            <a href="https://web.whatsapp.com" target="_blank"><img src="{{ asset('img/icon/wpp.png') }}" alt="Whatsapp"></a>
        </div>
    </header>
    <div class="propaganda">
        <!-- SLIDER -->
        <div class="slides">
            <!-- Radio Buttons -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!-- Fim Radio Buttons -->

            <!-- Slides images -->
                <div class="slide first">
                    <a href="/produtos"><img src="{{ asset('img/propaganda/minoxidil.jpg') }}" alt="Imagem1"></a>
                </div>
                <div class="slide">
                    <a href="/produtos"><img src="{{ asset('img/propaganda/gel.jpg') }}" alt="Imagem2"></a>
                </div>
                <div class="slide">
                    <a href="/produtos"> <img src="{{ asset('img/propaganda/produtos.jpg') }}" alt="Imagem3"></a>
                </div>
                <div class="slide">
                    <a href="/produtos"> <img src="{{ asset('img/propaganda/dicas.jpg') }}" alt="Imagem4"></a>
                </div>
            <!-- Fim Slides images -->

            <!-- Navigation Auto -->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <!-- Fim Navigation Auto -->
        </div>
        <!-- SLIDER -->
        
        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>

    </div>
    <div id="unidades">
        <div class="unidade">
            <img src="https://images.unsplash.com/photo-1622288432450-277d0fef5ed6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Unidade 1">
            <h4>Unidade</h4>
            <h2>Teixeira Dias</h2>
            <address>Rua Antonio Teixeira Dias, 521</address>
            <span>(31) 99876-5432</span>
        </div>
        <div class="unidade">
            <!-- <img src="{{ asset('img/unidades/unidade2.jpg') }}" alt="Unidade 2"> -->
            <img src="https://images.unsplash.com/photo-1516470930795-6ba2564824aa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" alt="Unidade 2">
            <h4>Unidade</h4>
            <h2>Barreiro</h2>
            <address>Av. Olinto Meireles, 5521</address>
            <span>(31) 91234-5678</span>
        </div>
        <div class="unidade">
            <!-- <img src="{{ asset('img/unidades/unidade3.jpg') }}" alt="Unidade 3"> -->
            <img src="https://images.unsplash.com/photo-1573588546512-2ace898aa480?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Unidade 3">
            <h4>Unidade</h4>
            <h2>Santa Helena</h2>
            <address>Rua José Faleiro, 1578</address>
            <span>(31) 99876-5432</span>
        </div>
        <div class="unidade">
            <!-- <img src="{{ asset('img/unidades/unidade4.jpg') }}" alt="Unidade 4"> -->
            <img src="https://images.unsplash.com/photo-1593702275687-f8b402bf1fb5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Unidade 4">
            <h4>Unidade</h4>
            <h2>Milionários</h2>
            <address>Rua Caetano Pirri, 21</address>
            <span>(31) 99876-5432</span>
        </div>
    </div>
    <div id="sobre">
        <div id="texto">
            <h1>Nosso estilo</h1>
            <p>Lorem ipsum enim ullamcorper per lobortis quisque ut porttitor cursus dapibus vel, himenaeos habitant nunc erat commodo metus donec diam bibendum dolor, venenatis nam rhoncus faucibus tincidunt habitant fames taciti morbi adipiscing. donec tortor sapien in ad mattis posuere venenatis, interdum cras inceptos sit aenean tincidunt augue eget, fusce tincidunt in egestas bibendum adipiscing. aliquam rhoncus euismod platea orci ultricies donec imperdiet, elit taciti tellus quisque tristique ligula tristique praesent, faucibus augue ac inceptos curabitur mollis. volutpat pharetra nunc curae ligula auctor euismod tempor eu eleifend, sollicitudin porttitor ut dictum luctus convallis scelerisque integer. </p>
            <p>Taciti condimentum cursus leo turpis ante ultrices lectus a accumsan condimentum potenti cursus sodales eu integer, justo tristique dapibus lectus tristique sapien suscipit praesent congue curabitur, vitae curae ad tempor ad porta sodales enim netus. </p>
            <p>Non elit torquent facilisis interdum mi conubia sapien, pulvinar scelerisque magna lectus est primis erat, ultricies pellentesque lectus euismod ultrices eros. </p>
        </div>
        <div id="img">
            <img src="https://images.unsplash.com/photo-1622286342621-4bd786c2447c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="About Image">
        </div>
    </div>
    <div id="produtos">
        <a href="/produtos">
            <h1>Encontre o produto que você precisa aqui!</h1>
            <img src="https://cdn-icons-png.flaticon.com/512/724/724927.png" alt="seta">
        </a>
    </div>
    <div id="servicos">
        <div id="img">
            <img src="https://images.unsplash.com/photo-1553521041-d168abd31de3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGJhcmJlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img-servicos">
        </div>
        <div class="coluna">
            <div id="titulo">
                <h1>Nossos Serviços</h1>
            </div>
            <div class="linha">
                <img src="https://cdn-icons-png.flaticon.com/512/42/42055.png" alt="icon-hair">
                <p>Corte de cabelo</p>
                <p>R$ 30,00</p>
            </div>            
            <div class="linha">
                <img src="https://cdn-icons-png.flaticon.com/512/273/273433.png" alt="icon-barba">
                <p>Barba com Toalha Quente</p>
                <p>R$ 40,00</p>
            </div>            
            <div class="linha">
                <img src="https://cdn-icons-png.flaticon.com/512/5747/5747102.png" alt="icon-cabelo-barba">
                <p>Corte de Cabelo e Barba</p>
                <p>R$ 70,00</p>
            </div>            
            <div class="linha">
                <img src="https://cdn-icons-png.flaticon.com/512/2821/2821012.png" alt="Navalha">
                <p>Pezinho</p>
                <p>R$ 20,00</p>
            </div>            
            <div class="linha">
                <img src="https://cdn-icons-png.flaticon.com/512/82/82862.png" alt="Sobranchela">
                <p>Sobrancelha</p>
                <p>R$ 20,00</p>
            </div>            
            <div class="linha">
                <img src="https://cdn-icons-png.flaticon.com/512/5256/5256952.png" alt="Barboterapia">
                <p>Barboterapia</p>
                <p>R$ 75,00</p>
            </div>            
        </div>
        <div class="coluna"></div>
    </div>
    <div id="agendamento">
        <h1>Agendamento</h1>
        <form action="/agendamento" method="post">
            @csrf
            <div class="row">
                <label>Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Insira o nome aqui">
            </div>
            
            <div class="row">
                <label>Data: </label>
                <input type="date" name="data" id="data">
            </div>

            <div class="row">
                <label>Hora: </label>
                <input type="time" name="hora" id="hora">
            </div>

            <div class="row">
                <label>Serviços: </label>
                <input type="checkbox" name="servico[]" id="cabelo" value="cabelo"> Cabelo
                <input type="checkbox" name="servico[]" id="barba" value="barba"> Barba 
                <input type="checkbox" name="servico[]" id="cabeloBarba" value="cabeloBarba"> Cabelo e Barba
                <input type="checkbox" name="servico[]" id="pezinho" value="pezinho"> Pezinho
                <input type="checkbox" name="servico[]" id="sobrancelha" value="sobrancelha"> Sobrancelha
                <input type="checkbox" name="servico[]" id="barboterapia" value="barboterapia"> Barboterapia
            </div>
            

            <div class="row">
                <div id="checkbox-servicos">
                    <label>Unidade:</label>
                    <select name="unidade" id="unidade">
                        <option value=" ">Selecione uma unidade</option>
                        <option value="TeixeraDias">Teixeira Dias</option>
                        <option value="Barreiro">Barreiro</option>
                        <option value="SantaHelena">Santa Helena</option>
                        <option value="Milionarios">Milionários</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <label>Valor: </label><span>R$ 00,00</span>
            </div>

            <div class="row">
                <button type="submit" id="btn_agendamento">AGENDAR</button>
            </div>

        </form>
    </div>
    <footer>
        <h1>BARBEARIA PILOTO</h1>
        <h5>(31) 98765-4321</h5>
    </footer>
</body>
</html>