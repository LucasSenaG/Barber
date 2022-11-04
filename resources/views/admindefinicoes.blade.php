@extends('admin')
@section('conteudoadmin')
    <h1>Definições</h1>
    <form action="/salvarconfig" method="POST">
        @csrf
        @method('PUT')   
        <div class="conteudoadmin">
            <p>Horário de funcionamento: </p>
            de: <input type="time" name="horaabertura" id="horaabertura" value="{{ $configs[0]->horaabre }}">
            até: <input type="time" name="horafechamento" id="horafechamento" value="{{ $configs[0]->horafecha }}">
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
                <input type="text" name="servico" placeholder="Digite aqui o serviço" value="{{ $servicos[0]->nmservico }}">
                <input type="text" name="valor" placeholder="R$ 50,00" value="{{ $servicos[0]->valor }}">
        </div>
        <div class="conteudoadmin">
            <p>Unidades</p>
                <input type="text" name="unidade" placeholder="Digite uma nova unidade">
        </div>

        <div class="conteudoadmin">
            <p>Atendente</p>
                <input type="text" name="unidade" placeholder="Digite um novo atendente">
        </div>

        
        <div class="botao">
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection