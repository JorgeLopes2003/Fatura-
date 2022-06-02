<h2 class="text-left top-space">IVA Show</h2>

<h6>Id :</h6><p><?= $iva->id ?></p>
<h6>Percentagem :</h6><p><?= $iva->percentagem ?>%</p>
<h6>Descrição:</h6><p><?= $iva->descricao ?></p>
<h6>Taxa em Vigor :</h6><p>

<?php if($iva->valor_taxa_vigor == 1){
    echo 'Sim';
}elseif($iva->valor_taxa_vigor == 0){
    echo 'Não';
}?>

</p>
<h6>User Actions :</h6>
<p>
    <a href="index.php?r=iva/edit&&id=<?= $iva->id ?>" class="btn btn-info" role="button">Edit</a>
    <a href="index.php?r=iva/delete&&id=<?= $iva->id ?>" class="btn btn-warning" role="button">Delete</a>
</p>

<a href="index.php?r=iva/index" class="btn btn-info">Voltar ao Index</a>