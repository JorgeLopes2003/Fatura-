<h2 class="top-space"></h2>
<div style="width:80vw;box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.2); border:2px solid black; margin:0 auto;" class="row">
    <h6 style="position:relative;text-align:right"><?= 	date("d-m-Y", strtotime($fatura->data))?></h6>
    <h1 style="color:brown; font-size:60px"><?= $empresa->designacao_social ?></h1>
    <br>
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
    <h6>Contacto: <?= $empresa->telefone?></h6>
    <br>
    <br>
    <br>
    <h6>Recibo nº<?= $fatura->id ?>: <p style="color:red"></p>
    </h6>
    <div style="width:70vw;box-shadow: 3px 3px 3px 2px rgba(0, 0, 0, 0.2); border:2px solid black; margin:20px auto;" class="col-sm-12">
        <br>
        <table class="table tablestriped">
            <thead>
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
                    if ( $fatura->id == $linhafatura->fatura_id){
                ?>
                    <tr>
                        <td><?= $linhafatura->produto_id ?> </td>
                        <td><?= $linhafatura->quantidade ?> </td>
                        <td><?= $linhafatura->valor_unitario ?>€ </td>
                        <td><?= $linhafatura->valor_iva ?>% </td>
                    </tr>
                <?php } ?>
                <?php } ?>
            </tbody>

        </table>

        <br>
    </div>
    <div>
            <?php 
            foreach($user as $user){
            if ($user->id == $fatura->referencia_cliente) { 
                 if ($fatura->estado == "emitida") { ?>
                <h6>Cliente : <?= $user->username?></h6>
                <br>
                
            <?php } ?>
            <?php } ?>
            <?php
            if ($user->id == $fatura->referencia) {  
                if ($fatura->estado) { ?>
                <h6>Funcionário/Administrador: <?= $user->username?></h6>
                <br>
                
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <br>

    </div>
</div>
<br>
<br>
<br>
<br>