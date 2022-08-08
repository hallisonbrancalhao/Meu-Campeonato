<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use App\Models\Time;
use App\Http\Controllers\TimesController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class CampeonatosController extends Controller
{
    public function index()
    {
        $campeonatos = Campeonato::query()->orderBy('nome')->get();
        return view('campeonatos.quartas')->with('campeonatos', $campeonatos);
    }

    public function create()
    {
        return view('campeonatos/quartas');
    }

    public function store(Request $request)
    {

        $nomeCampeonato = $request->input('nomeCampeonato');
        $campeonato = new Campeonato();
        $campeonato->nome = $nomeCampeonato;
        $campeonato->save();

        $times = [
            'time1' => $request->input('time1'),
            'time2' => $request->input('time2'),
            'time3' => $request->input('time3'),
            'time4' => $request->input('time4'),
            'time5' => $request->input('time5'),
            'time6' => $request->input('time6'),
            'time7' => $request->input('time7'),
            'time8' => $request->input('time8'),
        ];

        //Atribuindo todos os times ao campeonato criado
        foreach ($times as $time) {
            $novoTime = new Time();
            $novoTime->nome = $request->input('time1');
            $novoTime->idCampeonato = $campeonato->getAttributes('id');
            $novoTime->save();
        }

        dd($request->all());
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
