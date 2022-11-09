@extends('admin')
@section('conteudoadmin')
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
            <input type="checkbox" name="dia[]" value="domingo"> Domingo
            <input type="checkbox" name="dia[]" value="segunda"> Segunda Feira
            <input type="checkbox" name="dia[]" value="terca"> Terça Feira
            <input type="checkbox" name="dia[]" value="quarta"> Quarta Feira
            <input type="checkbox" name="dia[]" value="quinta"> Quinta Feira
            <input type="checkbox" name="dia[]" value="sexta"> Sexta Feira
            <input type="checkbox" name="dia[]" value="sabado"> Sábado
        </div>
        <div class="conteudoadmin">
            <p>Serviços e Valores:</p>
            <div class="campodefinicoes">
                @foreach ($servicos as $servico)
                    <div class="linhadefinicoes">
                        <input type="text" placeholder="Digite aqui o serviço" value="{{ $servico->nmservico }}">
                        <input type="text" placeholder="Digite aqui o serviço" value="{{ $servico->valor }}">
                    </div>
                @endforeach
                <div class="linhadefinicoes">
                        <input type="text" name="servico" placeholder="Novo serviço">
                        <input type="text" name="valor" placeholder="Valor (Ex. 10.00)">
                </div>
            </div>
        </div>
        <div class="conteudoadmin">
            <p>Unidades</p>
            <div class="campodefinicoes">
                @foreach ($unidades as $unidade)
                <div class="linhadefinicoes">
                    <input type="text" name="unidade" placeholder="Digite uma nova unidade" value="{{ $unidade->nomeund }}">
                    <input type="text" name="endereco" placeholder="Digite o endereço" value="{{ $unidade->endereco }}">
                </div>
                @endforeach
                <div class="linhadefinicoes">
                    <input type="text" name="unidade" placeholder="Nova unidade">
                    <input type="text" name="endereco" placeholder="Digite o endereço">
                </div>
            </div>
        </div>

        <div class="conteudoadmin">
            <p>Atendente</p>
            <div class="campodefinicoes">
                @foreach ($atendentes as $atendente)
                <div class="linhadefinicoes">
                    <input type="text" name="atendente" placeholder="Novo atendente" value="{{ $atendente->nmatendente }}">
                </div>
                @endforeach
                <div class="linhadefinicoes">
                    <input type="text" name="atendente" placeholder="Novo atendente">
                </div>
            </div>
        </div>

        <div class="botao">
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection