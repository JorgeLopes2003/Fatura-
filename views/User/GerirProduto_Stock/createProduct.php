<h2 class="text-left top-space">Create Produto</h2>
<div class="container">
    <form action="index.php?r=produto/store" method="post" class="needs-validation row justify-content-center" novalidate>
        <div class="col col-6">
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição : </label>
                <input type="text" class="form-control" id="descricao" name="descricao" required>
                <div class="invalid-feedback">
                    Insert a descrição !
                </div>
                <div class="mb-3">
                    <label for="n_referencia" class="form-label">Referência:</label>
                    <input type="number" class="form-control" id="n_referencia" name="n_referencia" required>
                    <div class="invalid-feedback">
                        Insert a Referência !
                    </div>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock Inicial:</label>
                    <input type="number" class="form-control" id="stock" name="stock" required>
                    <div class="invalid-feedback">
                        Insert a stock (inicial) !
                    </div>
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label">Preco:</label>
                    <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
                    <div class="invalid-feedback">
                        Insert a Preço !
                    </div>
                </div>
                <div>
                <p>Taxa em Vigor</p>    
                <select class="form-control mb-3" id="taxavigor" name="taxavigor">
                <?php foreach($iva as $ivas ){ ?>
                 <option  value="<?=$ivas->id?>" ><?= $ivas->id ?></option>
                <?php } ?>
                </select>
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