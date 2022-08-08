<x-layout title="Home">
    <div class="py-5 text-center">
        <h2>Meu campeonato</h2>
        <p class="lead">Cadastre 8 times e confira a simulação de seu campeonato</p>
    </div>

    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Ultimos campeonatos</span>
                <span class="badge bg-primary rounded-pill">2</span>
            </h4>
            <ul class="list-group mb-3">

                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <h6 class="my-0">Brasileirao</h6>
                </li>
            </ul>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Criar novo</h4>

            <form class="needs-validation" method="post" action="/campeonatos/criar" novalidate>
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="nomeCampeonato" class="form-label"><h6>Nome do campeonato</h6> </label>
                        <input type="text" class="form-control" id="nomeCampeonato" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            O nome do campeonato é obrigatório
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="col-sm-3">
                        <label for="time1" class="form-label">Time 1</label>
                        <input type="text" class="form-control" id="time1" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Todos os times são obrigatórios
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <label for="time2" class="form-label">Time 2</label>
                        <input type="text" class="form-control" id="time2" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Todos os times são obrigatórios
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <label for="time3" class="form-label">Time 3</label>
                        <input type="text" class="form-control" id="time3" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Todos os times são obrigatórios
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <label for="time4" class="form-label">Time 4</label>
                        <input type="text" class="form-control" id="time4" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Todos os times são obrigatórios
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <label for="time5" class="form-label">Time 5</label>
                        <input type="text" class="form-control" id="time5" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Todos os times são obrigatórios
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <label for="time6" class="form-label">Time 6</label>
                        <input type="text" class="form-control" id="time6" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Todos os times são obrigatórios
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <label for="time7" class="form-label">Time 7</label>
                        <input type="text" class="form-control" id="time7" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Todos os times são obrigatórios
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <label for="time8" class="form-label">Time 8</label>
                        <input type="text" class="form-control" id="time8" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Todos os times são obrigatórios
                        </div>
                    </div>

                </div>

                <hr class="my-5">

                <button class="w-25 btn btn-success btn-lg" type="submit">Criar</button>
            </form>
        </div>
    </div>
</x-layout>
