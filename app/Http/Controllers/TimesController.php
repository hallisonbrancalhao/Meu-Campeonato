<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TimesController extends Controller
{
    public function index(Request $request)
    {
        $times = [
            'Flamengo',
            'Sao Paulo',
            'Palmeiras'
        ];

        return view('times.index')->with('times', $times);
    }
}
