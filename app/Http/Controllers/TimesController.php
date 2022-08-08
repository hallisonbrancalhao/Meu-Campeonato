<?php

namespace App\Http\Controllers;
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

    public function store(Request $request)
    {
        $nomeTime1 = $request->input('time1');
        $nomeTime2 = $request->input('time2');
        $nomeTime3 = $request->input('time3');
        $nomeTime4 = $request->input('time4');
        $nomeTime5 = $request->input('time5');
        $nomeTime6 = $request->input('time6');
        $nomeTime7 = $request->input('time7');
        $nomeTime8 = $request->input('time8');

        dd($request->all());
    }


}
