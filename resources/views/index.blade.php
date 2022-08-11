<x-layout title="Home">
    <div class="py-5 text-center">
        <h2>Meu campeonato</h2>
        <p class="lead">Cadastre 8 times e confira a simulação de seu campeonato</p>
    </div>

    <div class="row g-5">
        <x-historico-campeonatos campeonatos="" />
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Criar novo</h4>
            <x-formulario-novo-camp />
        </div>
    </div>
</x-layout>
