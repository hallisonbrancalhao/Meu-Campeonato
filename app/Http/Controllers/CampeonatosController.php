<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use App\Models\Partida;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampeonatosController extends Controller
{
    public function index()
    {
        $campeonatos = Campeonato::all();
        return view('campeonatos.quartas',['campeonatos' => $campeonatos]);
    }

    public function create()
    {
        $partidas = DB::select("
            select  b.nome as timeVisitante,
                    c.nome as timeCasa,
                    a.golsTimeCasa,
                    a.golsTimeVisitante
            from partidas a
                left join times b on
                    a.idTimeVisitante = b.id and
                    a.idCampeonato = b.idCampeonato
                left join times c on
                    a.idTimeCasa = c.id and
                    a.idCampeonato = c.idCampeonato
            where a.fase = 4 and a.idCampeonato = 1
        ");

        return view('campeonatos.quartas', compact('partidas'));
    }

    public function store(Request $request)
    {
        $campeonato = new Campeonato();
        $nomeCampeonato = $request->input('nomeCampeonato');
        $campeonato->nome = $nomeCampeonato;
        $campeonato->save();

        $timesNovos = [
            'time1' => $request->time1,
            'time2' => $request->time2,
            'time3' => $request->time3,
            'time4' => $request->time4,
            'time5' => $request->time5,
            'time6' => $request->time6,
            'time7' => $request->time7,
            'time8' => $request->time8,
        ];

        foreach ($timesNovos as $item) {
            $novoTime = new Time();
            $novoTime->nome = $item;
            $novoTime->idCampeonato = $campeonato->getAttributeValue('id');
            $novoTime->GP = 0;
            $novoTime->GS = 0;
            $novoTime->pontos = 0;
            $novoTime->save();
        }

        $time = new Time();
        $times = $time->where('idCampeonato', $campeonato->getAttributeValue('id'))->get();

        for($i = 0; $i < 4; $i++){
            $partida = new Partida();
            $partida->idTimeVisitante = $times[$i]->getAttributeValue('id');
            $partida->idTimeCasa = $times[$i+4]->getAttributeValue('id');
            $partida->idCampeonato = $campeonato->getAttributeValue('id');
            $partida->golsTimeCasa = rand(0, 5);
            $partida->golsTimeVisitante = rand(0, 5);
            $partida->fase = 4;
            $partida->save();
        }

            return redirect('campeonatos/quartas');
    }

    public function show(Campeonato $campeonatos)
    {
        //
    }

    public function edit(Campeonato $campeonatos)
    {
        //
    }

    public function update(Request $request, Campeonato $campeonatos)
    {
        //
    }

    public function destroy(Campeonato $campeonatos)
    {
        //
    }
}
