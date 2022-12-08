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
    
        // ddd($resultsconf);
    
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
        
        $dthoje = date_create('Y-m-d');
        $hrhoje = date_create('H:i');        
        if ($request->data < $dthoje) {
            return view('/naoconfirmado');
        } if ($request->data == $dthoje && $request->hora <= $hrhoje){
            return view('/naoconfirmado');
        }

        $dtagenda = date_create($request->data);
        $dtagenda = date_format($dtagenda, 'd/m/Y');

        $dtdisponivel = $this->agendaDisponivel($agenda->datahora);

        if ($dtdisponivel == null){
            $agenda->save();
        } else {
            return view('/naoconfirmado', ['databdd' => $dtdisponivel]);
        }

        return view('/confirmacao', ['data' => $dtagenda, 'request' => $request, 'databd' => $dtdisponivel]);
    }

    public function agendaDisponivel ($dataagenda){
        $results = DB::select("select id from agendas where datahora like '%$dataagenda%'");
        $qtdagendadia = count($results);
        for ($i=0 ; $i <= $qtdagendadia ; $i++){
            $dataagenda = date_create_from_format('Y-m-d H:i', $dataagenda);

            $id = $i + 1;
            try{
                $databd = DB::select("select datahora from agendas where id = $id");
                $databd = date_create_from_format('Y-m-d H:i:s', $databd[0]->datahora);
                
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

        $results = DB::select("select * from agendas where datahora like '2022-$mes-$dia%' and atendente = '$atendente'");
        $atendentes = DB::select("select nmatendente from atendentes");
        return view('/adminagenda', ['dados' => $results, 'mes' => $mes, 'dia' => $dia, 'atendentes' => $atendentes]);  
    }
    
}