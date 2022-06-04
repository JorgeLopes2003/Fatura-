<h2 class="text-left top-space">Iva Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
                <th>
                    <h3>Id</h3>
                </th>
                <th>
                    <h3>Percentagem (%) </h3>
                </th>
                <th>
                    <h3>Descrição</h3>
                <th>
                    <h3>Taxa em Vigor</h3>
                </th>
                </th>
                <th>
                    <h3>User Actions</h3>
                </th>
            </thead>
            <tbody>
                <?php foreach ($iva as $iva) { ?>
                    <tr>
                        <td><?= $iva->id ?> </td>
                        <td><?= $iva->percentagem ?> % </td>
                        <td><?= $iva->descricao ?></td>
                        <td><?php if ($iva->valor_taxa_vigor == 1) {
                                echo 'Sim';
                            } elseif ($iva->valor_taxa_vigor == 0) {
                                echo 'Não';
                            } ?></td>
                        <td>
                            <a href="index.php?r=iva/show&id=<?= $iva->id ?>" class="btn btn-info" role="button">Show</a>
                            <a href="index.php?r=iva/edit&id=<?= $iva->id ?>" class="btn btn-info" role="button">Edit</a>
                            <a href="index.php?r=iva/delete&id=<?= $iva->id ?>" class="btn btn-warning" role="button">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a new iva</h3>
        <p>
            <a href="index.php?r=iva/create" class="btn btn-info" role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->