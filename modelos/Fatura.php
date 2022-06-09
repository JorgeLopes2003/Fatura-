<?php 

class Fatura extends \ActiveRecord\Model{
    //Validação da presença dos campos da DB
    static $validates_presence_of = array(
        array('data'),     
        array('valortotal'),
        array('iva_total'),
        array('estado'), 
        array('referencia'),
        array('referencia_cliente')
    );

    //Relacionamento de 1 para N (tabela users com tabela faturas  e   fatura com linhafaturas) - "ligação"
    static $has_many = array(
        array('users'),
        array('linhafaturas')
    );

}