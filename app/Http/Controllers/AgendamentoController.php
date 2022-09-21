<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendamentoController extends Controller
{
    public function store (Request $request){
        $agenda = new Agenda();
        $agenda->nmCliente = $request->nome;
        $datahora = $request->data;
        $datahora = $datahora.' '.$request->hora;
        $agenda->datahora = $datahora;
        $agenda->servicos = $request->servico;

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
}