<form class="needs-validation" method="post" action="/campeonatos/criar">
    @csrf
    <div class="row g-3">
        <div class="col-sm-6">
            <label for="nomeCampeonato" class="form-label"><h6>Nome do campeonato</h6> </label>
            <input type="text" class="form-control" name="nomeCampeonato" required>
            <div class="invalid-feedback">
                O nome do campeonato é obrigatório
            </div>
        </div>

        <hr class="my-4">

        <div class="col-sm-3">
            <label for="time1" class="form-label">Time 1</label>
            <input type="text" class="form-control" name="time1" required>
            <div class="invalid-feedback">
                Todos os times são obrigatórios
            </div>
        </div>

        <div class="col-sm-3">
            <label for="time2" class="form-label">Time 2</label>
            <input type="text" class="form-control" name="time2" required>
            <div class="invalid-feedback">
                Todos os times são obrigatórios
            </div>
        </div>

        <div class="col-sm-3">
            <label for="time3" class="form-label">Time 3</label>
            <input type="text" class="form-control" name="time3" required>
            <div class="invalid-feedback">
                Todos os times são obrigatórios
            </div>
        </div>

        <div class="col-sm-3">
            <label for="time4" class="form-label">Time 4</label>
            <input type="text" class="form-control" name="time4" required>
            <div class="invalid-feedback">
                Todos os times são obrigatórios
            </div>
        </div>

        <div class="col-sm-3">
            <label for="time5" class="form-label">Time 5</label>
            <input type="text" class="form-control" name="time5" required>
            <div class="invalid-feedback">
                Todos os times são obrigatórios
            </div>
        </div>

        <div class="col-sm-3">
            <label for="time6" class="form-label">Time 6</label>
            <input type="text" class="form-control" name="time6"  required>
            <div class="invalid-feedback">
                Todos os times são obrigatórios
            </div>
        </div>

        <div class="col-sm-3">
            <label for="time7" class="form-label">Time 7</label>
            <input type="text" class="form-control" name="time7" required>
            <div class="invalid-feedback">
                Todos os times são obrigatórios
            </div>
        </div>

        <div class="col-sm-3">
            <label for="time8" class="form-label">Time 8</label>
            <input type="text" class="form-control" name="time8" required>
            <div class="invalid-feedback">
                Todos os times são obrigatórios
            </div>
        </div>

    </div>

    <hr class="my-5">

    <button class="w-25 btn btn-success btn-lg" type="submit">Criar</button>
</form>
