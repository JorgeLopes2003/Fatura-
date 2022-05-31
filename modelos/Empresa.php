<?php
    class Empresa extends \ActiveRecord\Model
    {
        //Validação da presença dos campos na DB
        static $validates_presence_of = array(
            array('designacao_social'),     
            array('email'),
            array('telefone'), 
            array('nif'),
            array('morada'),
            array('codigopostal'),
            array('localidade'),
            array('capital_social')
        );

       //Validacao do email é feita atravez do type='email' que ja verifica se tem '@' e se se segue com letras,
       //apesar de nao verificar se tem forma gmail.com ; hotmail.com , etc...        
    }