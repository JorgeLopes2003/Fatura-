<div class="container">
        <form action="index.php?r=plano" method="post" class="needs-validation row justify-content-center" novalidate>
            <div class="col col-6">
                <div class="mb-3">
                    <label for="inputMontante" class="form-label">Montante:</label>
                    <input type="text" class="form-control" id="credito" name="credito" required>
                    <div class="invalid-feedback">
                    Insira o Montante !
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputNumero" class="form-label">Número de Prestações:</label>
                    <input type="text" class="form-control" id="numPrest" name="numPrest" required>
                    <div class="invalid-feedback">
                        Insira o numero de prestaçoes que pretende pagar!
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'
    
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
    
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
    
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>