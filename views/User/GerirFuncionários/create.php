<div class="container">
    <br>
    <br>
    <h2 class="row justify-content-center">Registar Novo Funcionario ! </h2>
    <form action="index.php?r=funcionario/store" method="post" class="needs-validation row justify-content-center" novalidate>
        <div class="col col-6">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
                <div class="invalid-feedback">
                    Campo obrigatório !
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <input type="checkbox" onclick="myFunction()"> Show Password
                <p>
                <!--    
                $user->errors->on('password');
                -->
                </p>
                <div class="invalid-feedback">
                    Campo obrigatório!
                </div>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="number" class="form-control" id="telefone" name="telefone" required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="nif" class="form-label">NIF:</label>
                <input type="number" class="form-control" id="nif" name="nif" required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="morada" class="form-label">Morada:</label>
                <input type="text" class="form-control" id="morada" name="morada" required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="localidade" class="form-label">Localidade:</label>
                <input type="text" class="form-control" id="localidade" name="localidade" required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="codigopostal" class="form-label">Codigo Postal:</label>
                <input type="number" class="form-control" id="codigopostal" name="codigopostal" required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Criar Novo Funcionario</button>
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

    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>