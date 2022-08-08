<?php

namespace App\Http\Controllers;
use App\Models\Campeonato;
use App\Models\Time;
use Illuminate\Http\Request;

class TimesController extends Controller
{
    public function index(Request $request)
    {
        $times = [];

        return view('times.index')->with('times', $times);
    }

    public function create(){
        return view('times.create');
    }

    public function store($novosTimes)
    {
        /*
        $nomeTime1 = $request->input('time1');
        $time1 = new Time();
        $time1->nome = $nomeTime1;
        $nomeTime1->save();*/
        return redirect('campeonatos/quartas');

    }
}
