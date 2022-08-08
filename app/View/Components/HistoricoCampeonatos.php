<?php

namespace App\View\Components;

use App\Models\Campeonato;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class HistoricoCampeonatos extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $campeonatos;

    public function __construct($campeonatos)
    {
        $this->campeonatos = $campeonatos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.historico-campeonatos');
    }

    public function campeonatos() {
        return [
            'Basileirão',
            'Copa do Brasil'
        ];
    }
}
