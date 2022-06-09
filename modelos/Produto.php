<?php 
class Produto extends \ActiveRecord\Model{
    //Validação da presença dos campos da DB
    static $validates_presence_of = array(
        array('n_referencia'),     
        array('descricao'),
        array('stock','message'=>'Selecione uma quantidade mais baixa do item !'),
        array('preco'), 
        array('taxavigor'),
    );

    //Relacionamento de 1 para N (tabela user com tabela fatura) - "ligação"
    static $has_many = array(
        array('ivas'),
    );
}