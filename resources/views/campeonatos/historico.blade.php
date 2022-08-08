<x-layout >

    <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">{{ $title }}</span>
            <span class="badge bg-primary rounded-pill">2</span>
        </h4>
        <ul class="list-group mb-3">
            @foreach($campeonatos as $campeonato) :
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <h6 class="my-0">{{ $campeonato->nome }}</h6>
            </li>
            @endforeach
        </ul>
    </div>

</x-layout>
