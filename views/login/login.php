
<div class="container">
        <h2>Login</h2>
        <form action="index.php?r=login" method="post" class="needs-validation row justify-content-center" novalidate >
            <div class="col col-6">
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">
                        Campo obrigatório!
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pass" name="pass" required>
                    <div class="invalid-feedback">
                        Campo obrigatório!
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