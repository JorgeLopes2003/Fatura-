<?php

class Iva extends \ActiveRecord\Model{
    static $validates_presence_of = array(
        array('percentagem'),     
        array('descricao'),
        array('valortaxa')
    );

    //Relacionamento de 1 para N (tabela user com tabela fatura) - "ligação"
    static $has_many = array(
        array('produtos'),
    );
}