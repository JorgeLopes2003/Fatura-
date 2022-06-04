<div class="container">
    <br>
    <br>
    <h2 class="row justify-content-center">Gestão de Produtos e Stocks [<?= $produto->id ?>] ! </h2>
    <form action="index.php?r=produto/update&&id=<?= $produto->id ?>" method="post" class="needs-validation row justify-content-center" novalidate>
        <div class="col col-6">
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição (Nome Porduto):</label>
                <input type="text" step="0.01" class="form-control" id="descricao" name="descricao" value="<?= $produto->descricao ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="n_referencia" class="form-label">Referencia Numérica:</label>
                <input type="number" step="0.01" class="form-control" id="n_referencia" name="n_referencia" value=<?= $produto->n_referencia  ?> readonly>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock :</label>
                <input type="number" class="form-control" id="stock" name="stock" value=<?= $produto->stock ?> required>
                <div class="invalid-feedback">
                    Campo obrigatório!
                </div>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço (€) :</label>
                <input type="number"class="form-control" id="preco" name="preco" value=<?= $produto->preco?> readonly>
            </div>
            <button type="submit" class="btn btn-primary">Finalizar Gestão</button>
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