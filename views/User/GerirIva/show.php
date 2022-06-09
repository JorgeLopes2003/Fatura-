
<h1 class="text-center top-space">IVA Show</h1>
<div  class="text-center">
<h4>Id :</h4><p><?= $iva->id ?></p>
<h4>Percentagem :</h4><p><?= $iva->percentagem ?>%</p>
<h4>Descrição:</h4><p><?= $iva->descricao ?></p>
<h4>Taxa em Vigor :</h4><p>

<?php if($iva->valor_taxa_vigor == 1){
    echo 'Sim';
}elseif($iva->valor_taxa_vigor == 0){
    echo 'Não';
}?>

</p>
<h4>User Actions :</h4>
</div>
<div  class="text-center">
<p>
    
    <a href="index.php?r=iva/edit&&id=<?= $iva->id ?>" class="btn btn-info" role="button" style="margin:10px">Edit</a>
    <a href="index.php?r=iva/delete&&id=<?= $iva->id ?>" class="btn btn-warning" role="button" style="margin:10px">Delete</a>
    <a href="index.php?r=iva/index" class="btn btn-info" style="margin:10px">Voltar ao Index</a>
</p>

</div>


