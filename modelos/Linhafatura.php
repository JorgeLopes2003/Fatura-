<?php 

class Linhafatura extends \ActiveRecord\Model{
    //Validação da presença dos campos da DB
    static $validates_presence_of = array(
        array('quantidade'),     
        array('valor_iva'),
        array('valor_unitario'),
        array('fatura_id'), 
        array('produto_id'),
    );

    //Relacionamento de 1 para N (tabela user com tabela fatura) - "ligação"
    static $has_many = array(
        array('faturas'),
        array('produtos')
    );
}