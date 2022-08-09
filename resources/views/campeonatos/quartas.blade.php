<x-layout title="Quartas de Finais">
{{--    <x-tabela-quartas times="{{ $times }}"/>--}}
    <div class="container  py-5">
        <div class="row mb-5 col-sm-12 text-center">
            <h1> Quartas de finais </h1>
            <div class="row mb-10 col-sm-12 justify-content-center ">
                @foreach($partidas as $partida)
                    <ul class="mt-5 mb-2 list-group justify-content-center list-group-horizontal">
                        <li class="list-group-item w-25" >{{  $partida->timeCasa }}</li>
                        <li class="list-group-item">{{ $partida->golsTimeCasa }}</li>
                        <li class="list-group-item">{{ $partida->golsTimeVisitante  }}</li>
                        <li class="list-group-item w-25">{{ $partida->timeVisitante }}</li>
                    </ul>
                @endforeach
            <a href="/campeonatos/semifinais" class="mt-3 w-25 btn btn-success btn-sm justify-content-center" type="submit">Próxima fase</a>
            </div>
        </div>
    </div>

</x-layout>


