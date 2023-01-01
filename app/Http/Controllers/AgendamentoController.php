<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Atendentes;
use App\Models\Config;
use App\Models\Servicos;
use App\Models\Unidades;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class AgendamentoController extends Controller
{
    public function buscabd (){
        $resultsconf = DB::select("select * from configs");
        $resultsserv = DB::select("select * from servicos");
        $resultsunid = DB::select("select * from unidades");
        $resultsatend= DB::select("select * from atendentes");
        

        return view('/home', ['configs' => $resultsconf, 'servicos' => $resultsserv, 
                    'unidades' => $resultsunid, 'atendentes' => $resultsatend]);  
    }
    
    public function buscadef (){
        $resultsconf = DB::select("select * from configs");
        $resultsserv = DB::select("select * from servicos");
        $resultsunid = DB::select("select * from unidades");
        $resultsatend= DB::select("select * from atendentes");
        
        return view('/admindefinicoes', ['configs' => $resultsconf, 'servicos' => $resultsserv, 
                    'unidades' => $resultsunid, 'atendentes' => $resultsatend]);    
    }

    public function store (Request $request){
        $agenda = new Agenda();
        $agenda->nmCliente = $request->nome;
        $datahora = $request->data;
        $datahora = $datahora.' '.$request->hora;
        $agenda->datahora = $datahora;
        $agenda->servicos = $request->servico;
        $agenda->atendente = $request->barbeiro;

        $horaform = date_create_from_format('Y-m-d H:i', $datahora);

        $horaabre = DB::select("select horaabre from configs");
        $horaabre = date_create_from_format('Y-m-d H:i:s', $request->data.$horaabre[0]->horaabre);

        $horafecha = DB::select("select horafecha from configs");
        $horafecha = date_create_from_format('Y-m-d H:i:s', $request->data.$horafecha[0]->horafecha);


        date_default_timezone_set('America/Sao_Paulo');
        $dthoje = date('Y-m-d');
        $hrhoje = date('H:i');

        if ($request->data < $dthoje) {
            $erro = "Data ja passou.";
            dd($erro);
            return view('/naoconfirmado');
        } else if ($request->data == $dthoje && $request->hora <= $hrhoje){
            $erro = 'Hora ja passou';
            dd($erro);
            return view('/naoconfirmado');
        }  

        if ($horaform < $horaabre) {           
            $erro = "Loja ainda nao abriu";
            dd($erro);
            return view('/naoconfirmado');
        }

        if ($horaform > $horafecha) {
            $erro = "Loja já fechou";
            dd($erro);
            return view('/naoconfirmado');
        }

        $dtagenda = date_create($request->data);
        $dtagenda = date_format($dtagenda, 'd/m/Y');

        $dtdisponivel = $this->agendaDisponivel($agenda->datahora, $request->data);

        if ($dtdisponivel == null){
            $agenda->save();
        } else {
            return view('/naoconfirmado', ['databdd' => $dtdisponivel]);
        }

        return view('/confirmacao', ['data' => $dtagenda, 'request' => $request, 'databd' => $dtdisponivel]);
    }

    public function agendaDisponivel ($dataagenda, $data){    
        $results = DB::select("select id from agendas where datahora like '$data%'");
        $qtdagendadia = count($results);
        for ($i=0 ; $i <= $qtdagendadia ; $i++){
            $dataagenda = date_create_from_format('Y-m-d H:i:s', $dataagenda);
            $id = 0;
            try{
                $databd = DB::select("select datahora from agendas where datahora like '$data%'");
                $databd = date_create_from_format('Y-m-d H:i:s', $databd[$id]->datahora);
                $id++;
                $difhoratotal = date_diff($dataagenda, $databd);
                $difminutos = $difhoratotal->format('%i');
                $difhora = $difhoratotal->format('%h');

                if ($difminutos < 50 && $difhora == 0){
                    return $difhora;
                } 
            } catch (Exception $e) { 
                return null;
            };
        }
        return null;
    }

    public function storeconfig (Request $request){
        
        $config = new Config();
            $config->horaabre = date_create($request->horaabertura);
            $config->horafecha = date_create($request->horafechamento);
            $config->Domingo = $request->Domingo;
            $config->Segunda = $request->Segunda;
            $config->Terca = $request->Terca;
            $config->Quarta = $request->Quarta;
            $config->Quinta = $request->Quinta;
            $config->Sexta = $request->Sexta;
            $config->Sabado = $request->Sabado;
    
            $servicos = new Servicos();
            $servicos->nmservico = $request->servico;
            $servicos->valor = $request->valor;
    
            $unidades = new Unidades();
            $unidades->nomeund = $request->unidade;
            $unidades->endereco = $request->endereco;
            
            $atendentes = new Atendentes();
            $atendentes->nmatendente = $request->atendente;
            $atendentes->qtdatendimentos = 0;
            $atendentes->vlrarrecadado = 0;
    
    
            $servicos->save();
            $config->save();
            $unidades->save();
            $atendentes->save();
            
            return redirect('/admindefinicoes')->with('msg', 'Definições salvas com sucesso!');
    }

    public function exibeagenda() {
        $dataagendamento = date('Y-m-d');
        $dia = date('d');
        $mes = date('m');

        switch ($mes) {
            case 1: 
                $mes = "Janeiro";
            break;
            
            case 2:
                $mes = "Fevereiro";
            break;

            case 3: 
                $mes = "Março";
            break;

            case 4:
                $mes = "Abril";
            break;

            case 5:
                $mes = "Maio";
            break;
            
            case 6: 
                $mes = "Junho";
            break;

            case 7:
                $mes = "Julho";
            break;
            
            case 8:
                $mes = "Agosto";
            break;

            case 9:
                $mes = "Setembro";
            break;

            case 10:
                $mes = "Outubro";
            break;

            case 11:
                $mes = "Novembro";
            break;

            case 12:
                $mes = "Dezembro";
            break;
        }

        $results = DB::select("select * from agendas where datahora like '$dataagendamento%' order by datahora");
        $atendentes = DB::select("select nmatendente from atendentes");
        return view('/adminagenda', ['dados' => $results, 'dia' => $dia, 'mes' => $mes, 'atendentes' => $atendentes]);
    }

    public function pesquisadata(Request $request) {
        $mes = $request->mes;
        $dia = $request->dia;
        $ano = date('Y');
        $atendente = $request->atendente;

        switch ($mes) {
            case "Janeiro": 
                $mes = 01;
            break;
            
            case "Fevereiro":
                $mes = 02;
            break;

            case "Março": 
                $mes = 03;
            break;

            case "Abril":
                $mes = 04;
            break;

            case "Maio":
                $mes = 05;
            break;
            
            case "Junho": 
                $mes = 06;
            break;

            case "Julho":
                $mes = 07;
            break;
            
            case "Agosto":
                $mes = 8;
            break;

            case "Setembro":
                $mes = 9;
            break;

            case "Outubro":
                $mes = 10;
            break;

            case "Novembro":
                $mes = 11;
            break;

            case "Dezembro":
                $mes = 12;
            break;
        }

        $results = DB::select("select * from agendas where datahora like '$ano-$mes-$dia%' and atendente = '$atendente' order by datahora");
        $atendentes = DB::select("select nmatendente from atendentes");
        return view('/adminagenda', ['dados' => $results, 'mes' => $mes, 'dia' => $dia, 'atendentes' => $atendentes]);  
    }
    
    public function destroy($id){
        Agenda::findOrFail($id)->delete();
        return $this->exibeagenda();
    }

    
}