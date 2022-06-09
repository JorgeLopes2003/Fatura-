<h2 class="text-center top-space">Lista de Faturas</h2>

<h2 class="top-space"></h2>

<div class="row" style="margin-left:15%; margin-right:20%">

    <div class="col-sm-12">
        <br>
        <table class="table tablestriped">
            <thead>
                <th>
                    <h3>Nº</h3>
                </th>
                <th>
                   <h3>Valor Total</h3> 
                </th>
                <th>
                    <h3>Iva Total</h3>
                </th>
                <th>
                    <h3>Estado</h3>
                </th>
                <th>
                    <h3>User Actions</h3>
                </th>
            </thead>
            <tbody>
                <?php foreach ($fatura as $fatura) {
                    if ($fatura->estado == 'em lancamento') {
                ?>
                        <tr>
                            <td><?= $fatura->id ?> </td>
                            <td><?= $fatura->valortotal ?>€</td>
                            <td><?= $fatura->iva_total ?>€</td>
                            <td><?= $fatura->estado ?>
                            </td>
                            <td>
                                <a href="index.php?r=fatura/edit&id=<?= $fatura->id ?>" class="btn btn-info" role="button">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
        <br>
    </div>


    <div class="col-sm-6">
        <h3>Create a new Fatura !</h3>
        <p>
            <a href="index.php?r=fatura/create" class="btn btn-info" role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->