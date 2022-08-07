<x-layout title="Novo campeonato">
    <ul>
        @foreach($times as $time)
            <li> {{ $time }}</li>
        @endforeach
        
    </ul>
</x-layout>