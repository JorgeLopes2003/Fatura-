<h2 class="text-center top-space">Produtos Index</h2>
<h2 class="top-space"></h2>
<br>
<div class="row" style="margin-left:10%; margin-right:10%">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
                <th>
                    <h3>Descrição</h3>
                </th>
                <th>
                    <h3>Referência Numérica </h3>
                </th>
                <th>
                    <h3>Stock</h3>
                <th>
                    <h3>Preço</h3>
                </th>
                <th>
                    <h3>Taxa em vigor</h3>
                </th>
                </th>
                <th>
                    <h3>User Actions</h3>
                </th>
            </thead>
            <tbody>
                <?php foreach ($produto as $produto) { ?>
                    <tr>
                        <td><?= $produto->descricao ?> </td>
                        <td><?= $produto->n_referencia ?></td>
                        <td><?= $produto->stock  ?></td>
                        <td><?= $produto->preco ?>€</td>
                        <td><?= $produto->taxavigor ?>
                        </td>
                        <td>
                            <a href="index.php?r=produto/gerir&id=<?= $produto->id ?>" class="btn btn-info" role="button">Edit Stock</a>
                            <a href="index.php?r=produto/delete&id=<?= $produto->id ?>" class="btn btn-warning" role="button">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
    </div>
    <div class="col-sm-6" style="margin-left:35%">
        <h3>Create a new Produto</h3>
        <p>
            <a href="index.php?r=produto/create" class="btn btn-info" role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->