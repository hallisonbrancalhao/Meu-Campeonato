<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use Illuminate\Http\Request;
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

        return redirect('/index');
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
