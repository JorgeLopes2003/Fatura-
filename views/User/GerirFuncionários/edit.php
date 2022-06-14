<div class="container">
    <br>
    <br>
    <h2 class="row justify-content-center">Gestão do Funcionario [<?= $user->username ?>] ! </h2>
    <form action="index.php?r=funcionario/update&&id=<?= $user->id ?>" method="post" class="needs-validation row justify-content-center" novalidate>
        <div class="col col-6">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $user->username ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="text" class="form-control" id="password" name="password" value="<?= $user->password  ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value=<?= $user->email ?> required>
                <div class="invalid-feedback">
                    Campo obrigatório(incorreto ou vazio)!
                </div>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="number"class="form-control" id="telefone" name="telefone" value=<?= $user->telefone?> required>
            </div>
            <div class="mb-3">
                <label for="nif" class="form-label">NIF:</label>
                <input type="number"class="form-control" id="nif" name="nif" value=<?= $user->nif?> required>
            </div>
            <div class="mb-3">
                <label for="morada" class="form-label">Morada:</label>
                <input type="text"class="form-control" id="morada" name="morada" value="<?= $user->morada?>" required>
            </div>
            <div class="mb-3">
                <label for="localidade" class="form-label">Localidade:</label>
                <input type="text"class="form-control" id="localidade" name="localidade" value="<?= $user->localidade?>" required>
            </div>
            <div class="mb-3">
                <label for="codigopostal" class="form-label">Localidade:</label>
                <input type="number"class="form-control" id="codigopostal" name="codigopostal" value="<?= $user->codigopostal?>" required>
            </div>
            <button type="submit" class="btn btn-info">Finalizar Edição Funcionario</button>
            <div>
                <br>
                <br>
                <h3>Nota: </h3>
                <p>Os dados inseridos previamente nas caixas de insersão são referentes ao email e password atualmente associados á conta .</p>
            </div>
            <br>
            <br>
            <br>
        </div>
    </form>
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