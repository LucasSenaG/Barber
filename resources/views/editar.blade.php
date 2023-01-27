@extends('admin')
@section('conteudoadmin')
<div id="editar">

    <div class="tituloedit">
        <h3>Editar agendamento de {{ $dados[0]->nmCliente }} </h3>
    </div>

    <form action="/edit" method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <label>Nome: </label>
            <input type="text" name="nome" id="nome" value="{{ $dados[0]->nmCliente }}">
        </div>

        <div class="row">
            <label>Data: </label>
            <input type="date" name="data" id="data" value="{{ $dados[0]->datahora }}">
        </div>

        <div class="row">
            <label>Hora: </label>
            <input type="time" name="hora" id="hora" value="">
        </div>

        <div class="row">
            <div id="servico">
                <div id="title">
                    <label>Serviços: </label>
                </div>
                <input type="checkbox" name="servico[]" id="cabelo" value="cabelo"> Cabelo
                <input type="checkbox" name="servico[]" id="barba" value="barba"> Barba
                <input type="checkbox" name="servico[]" id="cabeloBarba" value="cabeloBarba"> Cabelo e Barba
                <input type="checkbox" name="servico[]" id="pezinho" value="pezinho"> Pezinho
                <input type="checkbox" name="servico[]" id="sobrancelha" value="sobrancelha"> Sobrancelha
                <input type="checkbox" name="servico[]" id="barboterapia" value="barboterapia"> Barboterapia
            </div>
        </div>


        <div class="row">
            <div id="checkbox-servicos">
                <label>Unidade:</label>
                <option></option>
            </div>
        </div>

        <div class="row">
            <div id="checkbox-servicos">
                <label>Barbeiro:</label>
                <select name="barbeiro" id="barbeiro">
                    @foreach ($atendentes as $atendente)
                        <option type="text" name="atendente" id="atendente" value="{{ $atendente->nmatendente }}">{{ $atendente->nmatendente }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </form>

</div>
@endsection