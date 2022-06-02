<h2 class="text-left top-space">Create IVA</h2>
<div class="container">
    <form action="index.php?r=iva/store" method="post" class="needs-validation row justify-content-center" novalidate>
        <div class="col col-6">
            <div class="mb-3">
                <label for="percentagem" class="form-label">Percentagem : </label>
                <input type="number" class="form-control" id="percentagem" name="percentagem" required>
                <div class="invalid-feedback">
                    Insert a Percentagem !
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição :</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" required>
                    <div class="invalid-feedback">
                        Insert a Descrição !
                    </div>
                </div>
                <div class="mb-3">
                    <label for="valor_taxa_vigor" class="form-label">Taxa em vigor (0 = Não, 1 = Sim):</label>
                    <input type="number" min="0" max="1" class="form-control" id="valor_taxa_vigor" name="valor_taxa_vigor" required>
                    <div class="invalid-feedback">
                        Insert se Taxa está em Vigor !
                    </div>
                </div>
                <div>
                    <br>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
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