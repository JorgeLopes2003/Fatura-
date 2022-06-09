<h2 class="text-center top-space">Lista de Faturas</h2>

<div style="width:80vw;box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.2); border:2px solid black; margin:0 auto;" class="row">
    <h1><?= $empresa->designacao_social ?></h1>
    <br>
    <br>
    <br>
    <h6><?= $empresa->designacao_social ?></h6>
    <h6><?= $empresa->localidade ?></h6>
    <h6><?= $empresa->morada ?></h6>
    <h6>NIF:<?= $empresa->nif ?></h6>
    <br>
    <br>
    <h6><?= $empresa->email ?></h6>
    <br>
    <br>
    <br>
    <h6>Recibo nº<?= $fatura->id ?>: <p style="color:red">(Posteriormente Atribuido)</p>
    </h6>
    <div style="width:70vw;box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.2); border:2px solid black; margin:20px auto;" class="col-sm-12">
<br>
        <table class="table tablestriped">
            <thead>
                <th>
                    <h3>Nº Fatura</h3>
                </th>
                <th>
                    <h3>Produto</h3>
                </th>
                <th>
                    <h3>Quantidade</h3>
                </th>
                <th>
                    <h3>Valor Unitário</h3>
                </th>
                <th>
                    <h3>Iva</h3>
                </th>
            </thead>
            <tbody>
                <?php foreach ($linhafatura as $linhafatura) {    //Linha de Fatura !!!!!! --- CORRIGIR 
                    if ($linhafatura->fatura_id == $fatura->id) {
                ?>
                        <tr>

                            <td><?= $linhafatura->fatura_id ?> </td>
                            <td><?= $linhafatura->produto_id ?> </td>
                            <td><?= $linhafatura->quantidade ?> </td>
                            <td><?= $linhafatura->valor_unitario ?>€ </td>
                            <td><?= $linhafatura->valor_iva ?> </td>
                            <td>
                                <a href="index.php?r=linhafatura/delete&&id=<?= $linhafatura->id ?>" class="btn btn-danger" role="button">Delete</a>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>

        </table>
        <p style="text-align:center"><a href="index.php?r=linhafatura/create&&id=<?= $fatura->id ?>">Adicionar Linha de Fatura</a></p>
        <br>

    </div>
    <br>
    <br>
    <br>
</div> <!-- /row -->

<div style="margin-left:10%; margin-top:1%;" class="col-sm-6 text-center">
    <p >
    <form action='index.php?r=fatura/storefinalizar&&id=<?= $fatura->id ?>' method="post" style="width:80vw;">
        <label for="referencia_cliente" class="form-label">Cliente Referente :</label>
        <select style="width:150px;margin-left:44% " class="form-control mb-3" name="referencia_cliente" id="referencia_cliente">
            <?php foreach ($user as $user) {
                if ($user->role == 3) { ?>

                    <option value="<?= $user->username ?>"><?= $user->username ?></option>
                <?php } ?>
            <?php } ?>
        </select>
        <button type="submit" class="btn btn-primary" class="btn btn-info">Finalizar</button>
        <a href="index.php?r=fatura/delete&&id=<?= $fatura->id ?>" class="btn btn-danger" style="margin-left:37%" role="button">Delete</a>
        <a href="index.php?r=fatura/storedepois&&id=<?= $fatura->id ?>" class="btn btn-info" role="button" style="margin-left:37%">Finalizar Depois</a>
    </form>
    </p>

</div>
<br>
<br>
<br>
<br>