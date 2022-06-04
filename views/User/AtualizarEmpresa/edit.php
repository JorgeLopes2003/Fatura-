<div class="container">
    <br>
    <br>
    <h2 class="row justify-content-center">Alteração de Dados Empresa ! </h2>
    <form action="index.php?r=empresa/update" method="post" class="needs-validation row justify-content-center" novalidate>
        <div class="col col-6">
            <div class="mb-3">
                <label for="designacao_social" class="form-label">Designação Social:</label>
                <input type="text" class="form-control" id="designacao_social" name="designacao_social" value=<?= $empresa->designacao_social ?> readonly>
                <div class="invalid-feedback">
                    Campo obrigatório !
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value=<?= $empresa->email ?> required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="capital_social" class="form-label">Capital Social:</label>
                <input type="number" class="form-control" id="capital_social" name="capital_social" value=<?= $empresa->capital_social ?> required>
                <p>
                </p>
                <div class="invalid-feedback">
                    Campo obrigatório!
                </div>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="number" class="form-control" id="telefone" name="telefone" value=<?= $empresa->telefone ?> required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="nif" class="form-label">NIF:</label>
                <input type="number" class="form-control" id="nif" name="nif" value=<?= $empresa->nif ?> required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="morada" class="form-label">Morada:</label>
                <input type="text" class="form-control" id="morada" name="morada" value="<?= $empresa->morada ?>" required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="localidade" class="form-label">Localidade:</label>
                <input type="text" class="form-control" id="localidade" name="localidade" value=<?= $empresa->localidade ?> required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="codigopostal" class="form-label">Codigo Postal:</label>
                <input type="number" class="form-control" id="codigopostal" name="codigopostal" value=<?= $empresa->codigopostal ?> required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Dados</Datag></button>
        </div>
        <div>
                <br>
                <br>
                <h3>Nota: </h3>
                <p>Os dados inseridos previamente nas caixas de insersão são referentes ao email e password atualmente associados á conta .</p>
        </div>
    </form>
    <br>
    <br>
    <br>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

</script>