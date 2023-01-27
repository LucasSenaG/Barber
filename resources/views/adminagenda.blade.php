@extends('admin')
@section('conteudoadmin')
    <h1>Agenda</h1>

    <form action="/pesquisadata" method="get">
        <div class="cabecalho">
            <div class="mes">
                <span>Mês: </span>
                <select name="mes" id="mes">
                    <option value="{{ $mes }}">{{ $mes }}</option>
                    <option value="01">Janeiro</option>
                    <option value="02">Fevereiro</option>
                    <option value="03">Março</option>
                    <option value="04">Abril</option>
                    <option value="05">Maio</option>
                    <option value="06">Junho</option>
                    <option value="07">Julho</option>
                    <option value="08">Agosto</option>
                    <option value="09">Setembro</option>
                    <option value="10">Outubro</option>
                    <option value="11">Novembro</option>
                    <option value="12">Dezembro</option>
                </select>
            </div>
        
            <div class="dia">
                <span>Dia: </span>
                <select name="dia" id="dia">
                    <option value="{{ $dia }}">{{ $dia }}</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>

            <select name="atendente" id="atendente">
                        <option value=" ">Selecione um atendente</option>
                    @foreach ($atendentes as $atendente)
                        <option value="{{ $atendente->nmatendente }}">{{ $atendente->nmatendente }}</option>
                    @endforeach
            </select>

            <div class="btnbuscaagenda">
                <a href="/pesquisadata">
                    <button type="submit">Pesquisar</button>
                </a>
            </div>
        </div>
    </form>

        @foreach ($dados as $dado)
            <div class="linhacalendario">
                <div class="horarioagenda">{{ $dado->datahora }}</div>
                <div class="nmclienteagenda">{{ $dado->nmCliente }}</div>
                <div class="servicosagenda">{{ $dado->servicos }}</div>
                <div class="atendente">{{ $dado->atendente }}</div>
                <div class="vlratendimento">R$ 30,00</div>
                <div class="editarexcluir">
                <form action="/editaragenda/{{ $dado->id }}" method="get">
                    @csrf
                    <button type="submit"><img src="https://cdn-icons-png.flaticon.com/512/3838/3838756.png"></button>
                </form>
                    <div id="btnexlcuir">
                        <form action="/deletaagenda/{{ $dado->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"> <img src="https://cdn-icons-png.flaticon.com/512/8788/8788372.png"> </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

@endsection