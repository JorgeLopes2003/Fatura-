<div class="container">
    <br>
    <br>
    <h2 class="row justify-content-center">Gestão do Funcionario [<?= $user->username ?>] ! </h2>
    <form action="index.php?r=funcionario/update&&id=<?= $user->id ?>" method="post" class="needs-validation row justify-content-center" novalidate>
    <div class="col col-6">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php if(isset($user)){
                    echo $user->username;
                }  ?>"required>
                <div class="invalid-feedback">
                    Campo obrigatório !
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($user)){
                    echo $user->email;
                } ?>"required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password"required>
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
                <input type="number" class="form-control" id="telefone" name="telefone" 
                value="<?php if(isset($user)){echo $user->telefone;}?>"required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="nif" class="form-label">NIF:</label>
                <input type="number" class="form-control" id="nif" name="nif" value="<?php if(isset($user)){
                    echo $user->nif;
                } ?>"required>
                <br>
                <?php if(isset($error)){?>
                    <p class="alert alert-danger" role="alert"><?= $error;?> </p>
                    <?php  }?>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="morada" class="form-label">Morada:</label>
                <input type="text" class="form-control" id="morada" name="morada" value="<?php if(isset($user)){
                    echo $user->morada;
                } ?>"required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="localidade" class="form-label">Localidade:</label>
                <input type="text" class="form-control" id="localidade" name="localidade" value="<?php if(isset($user)){
                    echo $user->localidade;
                }?>"required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="codigopostal" class="form-label">Codigo Postal:</label>
                <input type="number" class="form-control" id="codigopostal" name="codigopostal" value="<?php if(isset($user)){
                    echo $user->codigopostal;
                } ?>"required>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <button type="submit" class="btn btn-info">Finalizar Edição Funcionario</button>
            <div>
                <br>
                <br>
                <h3>Nota: </h3>
                <p>Os dados inseridos previamente nas caixas de insersão são referentes a dados associados á conta <br>
                    Por segurança a password não é apresentada!</p>
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
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>