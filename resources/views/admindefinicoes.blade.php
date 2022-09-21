@extends('admin')
@section('conteudoadmin')
    <h1>Definições</h1>
    <form action="">
        @csrf   
        <div class="conteudoadmin">
            <p>Horário de funcionamento: </p>
            de: <input type="time" name="horaabertura" id="horaabertura">
            até: <input type="time" name="horafechamento" id="horafechamento">
        </div>
        <div class="conteudoadmin">
            <p>Dias de funcionamento:</p>
            <input type="checkbox" name="domingo" id="domingo"> Domingo
            <input type="checkbox" name="segunda" id="segunda"> Segunda Feira
            <input type="checkbox" name="terca" id="terca"> Terça Feira
            <input type="checkbox" name="quarta" id="quarta"> Quarta Feira
            <input type="checkbox" name="quinta" id="quinta"> Quinta Feira
            <input type="checkbox" name="sexta" id="sexta"> Sexta Feira
            <input type="checkbox" name="sabado" id="sabado"> Sábado
        </div>
        <div class="conteudoadmin">
            <p>Serviços e Valores:</p>
            
            <input type="text" name="servico" placeholder="Corte de cabelo">
            <input type="text" name="valor" placeholder="25,00">
        </div>
        <div class="botao">
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection