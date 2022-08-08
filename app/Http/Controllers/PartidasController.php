<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use App\Models\partidas;
use App\Models\Time;
use Illuminate\Http\Request;

class PartidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function show(partidas $partidas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function edit(partidas $partidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, partidas $partidas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partidas  $partidas
     * @return \Illuminate\Http\Response
     */
    public function destroy(partidas $partidas)
    {
        //
    }
}
