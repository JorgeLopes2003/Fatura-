<?php

class Auth 
{
    public function __construct()
    {
        //if(session_status() == PHP_SESSION_NONE){
            session_start();
        //}
    }

    public function login($name, $pass){ //Corrrigir 
        
        $user = User::find_by_username_and_password($name, $pass);
    
        if(!$user){
        return true ;
        }elseif(isset($name)&&isset($pass)){
            if($user->role == 1){
               return  $_SESSION['administrador'] = $name;
            }elseif($user->role == 2){
                return $_SESSION['funcionario'] = $name;
            }elseif($user->role == 3){
                return $_SESSION['cliente'] = $name;
            }
        }return false;
    }
    
    public function isLoggedIn(){
        return isset($_SESSION['administrador']);
    }

    public function isLoggedIn2(){
        return isset($_SESSION['funcionario']);
    }
    
    public function isLoggedIn3(){
        return isset($_SESSION['cliente']);
    }
    
    public function logout(){
        session_destroy();
    }

}

?>