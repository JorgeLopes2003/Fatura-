<div class="container">
    <br>
    <br>
    <h2 class="row justify-content-center">Atualizar Dados do IVA [<?= $iva->descricao ?>] ! </h2>
    <form action="index.php?r=iva/update&&id=<?=$iva->id ?>" method="post" class="needs-validation row justify-content-center" novalidate>
        <div class="col col-6">
        <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="number" class="form-control" id="id" name="id" value=<?= $iva->id ?> readonly>
                <div class="invalid-feedback">
                    Campo obrigatório !
                </div>
            </div>
            <div class="mb-3">
                <label for="percentagem" class="form-label">Percentagem:</label>
                <input type="number" step="0.01" class="form-control" id="percentagem" name="percentagem" value=<?= $iva->percentagem ?> required>
                <div class="invalid-feedback">
                    Campo obrigatório !
                </div>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição :</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?= $iva->descricao ?>" required>
                <div class="invalid-feedback">
                    Campo obrigatório!
                </div>
            </div>
            <div class="mb-3">
                <label for="valor_taxa_vigor" class="form-label">Taxa em Vigor (0 = Não, 1 = Sim):</label>
                <input type="number" min="0" max="1" class="form-control" id="valor_taxa_vigor" name="valor_taxa_vigor" value=<?= $iva->valor_taxa_vigor ?> required>
                <div class="invalid-feedback">
                    Campo obrigatório!
                </div>
            </div>
            <button type="submit" class="btn btn-info">Atualizar</button>
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
</script>