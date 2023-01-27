@extends('admin')
@section('conteudoadmin')
    <div class="msgretorno">
        <div class="linhamsgretorno">
            @if (session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
        </div>
    </div>
    <h1>Definições</h1>
    <form action="/salvarconfig" method="POST">
        @csrf
        @method('PUT')   
        <div class="conteudoadmin">
            <p>Horário de funcionamento: </p>
                @if ($configs != null)
                    de: <input type="time" name="horaabertura" id="horaabertura" value="{{ $configs[0]->horaabre }}">
                    até: <input type="time" name="horafechamento" id="horafechamento" value="{{ $configs[0]->horafecha }}">
                @endif
                @if ($configs == null)
                    de: <input type="time" name="horaabertura" id="horaabertura">
                    até: <input type="time" name="horafechamento" id="horafechamento">
                @endif
        </div>
        <div class="conteudoadmin">
            <p>Dias de funcionamento:</p>
            @if ($configs != null)
                @if ($configs[0]->Domingo != null)
                    <input type="checkbox" name="Domingo" checked> Domingo
                @else
                    <input type="checkbox" name="Domingo"> Domingo
                @endif


                @if ($configs[0]->Segunda != null)
                    <input type="checkbox" name="Segunda" checked> Segunda Feira
                @else
                    <input type="checkbox" name="Segunda"> Segunda Feira
                @endif


                @if ($configs[0]->Terca != null)
                    <input type="checkbox" name="Terca" checked> Terça Feira
                @else
                    <input type="checkbox" name="Terca"> Terça Feira
                @endif


                @if ($configs[0]->Quarta != null)
                    <input type="checkbox" name="Quarta" checked> Quarta Feira
                @else
                    <input type="checkbox" name="Quarta"> Quarta Feira
                @endif


                @if ($configs[0]->Quinta != null)
                    <input type="checkbox" name="Quinta" checked> Quinta Feira
                @else
                    <input type="checkbox" name="Quinta"> Quinta Feira
                @endif


                @if ($configs[0]->Sexta != null)
                    <input type="checkbox" name="Sexta" checked> Sexta Feira
                @else
                    <input type="checkbox" name="Sexta"> Sexta Feira
                @endif


                @if ($configs[0]->Sabado != null)
                    <input type="checkbox" name="Sabado" checked> Sábado
                @else
                    <input type="checkbox" name="Sabado"> Sábado
                @endif
            @else
                <input type="checkbox" name="Domingo"> Domingo
                <input type="checkbox" name="Segunda"> Segunda
                <input type="checkbox" name="Terca"> Terça
                <input type="checkbox" name="Quarta"> Quarta
                <input type="checkbox" name="Quinta"> Quinta
                <input type="checkbox" name="Sexta"> Sexta
                <input type="checkbox" name="Sabado"> Sábado
            @endif
        </div>
        <div class="conteudoadmin">
            <div class="titulo">
                <p>Serviços e Valores:</p>
                <div class="btnadclinha" onclick="exblinhaserv()">
                    <img src="https://cdn-icons-png.flaticon.com/512/3032/3032276.png" id="imgaddserv">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828851.png" id="imgrmvserv">
                </div>
            </div>
            <div class="campodefinicoes">
                @foreach ($servicos as $servico)
                    <div class="linhadefinicoes">
                        <input type="text" placeholder="Digite aqui o serviço" value="{{ $servico->nmservico }}">
                        <input type="text" placeholder="Digite aqui o serviço" value="{{ $servico->valor }}">
                    </div>
                @endforeach
                <div class="linhaadicionar" id="linhaadcserv">
                    <div class="linhadefinicoes" >
                            <input type="text" name="servico" placeholder="Novo serviço">
                            <input type="text" name="valor" placeholder="Valor (Ex. 10.00)">
                    </div>
                </div>
            </div>
        </div>
        <div class="conteudoadmin">
            <div class="titulo">
                <p>Unidades:</p>
                <div class="btnadclinha" onclick="exblinhaund()">
                    <img src="https://cdn-icons-png.flaticon.com/512/3032/3032276.png" id="imgaddund">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828851.png" id="imgrmvund">
                </div>
            </div>
            <div class="campodefinicoes">
                @foreach ($unidades as $unidade)
                <div class="linhadefinicoes">
                    <input type="text" name="unidade" placeholder="Digite uma nova unidade" value="{{ $unidade->nomeund }}">
                    <input type="text" name="endereco" placeholder="Digite o endereço" value="{{ $unidade->endereco }}">
                </div>
                @endforeach
                <div class="linhaadicionar" id="linhaadcund">
                    <div class="linhadefinicoes" >
                        <input type="text" name="unidade" placeholder="Nova unidade">
                        <input type="text" name="endereco" placeholder="Digite o endereço">
                    </div>
                </div>
            </div>
        </div>

        <div class="conteudoadmin">
        <div class="titulo">
                <p>Atendentes:</p>
                <div class="btnadclinha" onclick="exblinhaatendt()">
                    <img src="https://cdn-icons-png.flaticon.com/512/3032/3032276.png" id="imgaddatendnt">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828851.png" id="imgrmvatendnt">
                </div>
            </div>
            <div class="campodefinicoes">
                @foreach ($atendentes as $atendente)
                <div class="linhadefinicoes">
                    <input type="text" name="atendente" placeholder="Novo atendente" value="{{ $atendente->nmatendente }}" onchange="adclinha()">
                </div>
                @endforeach
                <div class="linhaadicionar" id="linhaadcatendt">
                    <input type="text" name="atendente" placeholder="Novo atendente">
                </div>
            </div>
        </div>

        <div class="botao">
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection