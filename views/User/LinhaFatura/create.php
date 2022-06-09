<h2 class="text-center top-space">Adicionar Linha de Fatura</h2>
<div class="container">
    <form action="index.php?r=linhafatura/store&&id=<?= $fatura->id ?>" method="post" class="needs-validation row justify-content-center" novalidate>
        <div class="col col-6">
            <div class="mb-3">
                <label for="descricao" class="form-label">Produto : </label>

                <select class="form-control mb-3" name="descricao" id="descricao">
                    <?php foreach ($produto as $produtos) { ?>
                        <option value="<?= $produtos->descricao ?>" ><?= $produtos->descricao ?></option>
                    <?php } ?>
                </select>
                <br>
                <br>
                <br>
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade: </label>
                    <input type="number" min="0" class="form-control" id="quantidade" name="quantidade" required>
                   <!-- <?php // if ($save == false) {
                       // echo $produto->errors->on('stock');
                   // } ?> -->
                    <div class="invalid-feedback">
                        Insert a Quantidade !
                    </div>
                    <div>
                        <br>
                    </div>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
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