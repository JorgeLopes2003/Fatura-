<div class="container">
    <br>
    <br>
    <h2 class="row justify-content-center">Atualizar Dados do Funcionario [<?= $_SESSION['funcionario'] ?>]!</h2>
    <form action="index.php?r=atualizar/update" method="post" class="needs-validation row justify-content-center" novalidate>
        <div class="col col-6">
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value=<?= $user->email ?>>
                <div class="invalid-feedback">
                    Campo obrigatório (Incorreto ou vazio) !
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value=<?= $user->password ?> required>
                <p><input type="checkbox" onclick="myFunction()"> Show Password</p>
            <!--    
              $user->errors->on('password');
            -->
                <div class="invalid-feedback">
                    Campo obrigatório!
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <div>
                <br>
                <br>
                <h3>Nota: </h3>
                <p>Os dados inseridos previamente nas caixas de insersão são referentes ao email e password atualmente associados á conta .</p>
            </div>
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