<?php

    class User extends \ActiveRecord\Model
    {
        //Validação da presença dos campos na DB
        static $validates_presence_of = array(
            array('username'),     
            array('password'),
            array('email'),
            array('telefone'), 
            array('nif','message'=> 'insira 9 caracteres para o nif'),
            array('morada'),
            array('localidade'),
            array('codigopostal'),
            array('role')
        );

        //Validação do formato do email para verificar se contem "@" e para ver se palavra pass é "weak" 
        static $validates_format_of = array(
                                                        // Corrigir isto 
           // array('password', 'with' =>'/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/', 'message' => 'is too weak')
        );
        
        //Relacionamento de 1 para N (tabela user com tabela fatura) - "ligação"
        static $has_many = array(
            array('faturas')               
            );
    }