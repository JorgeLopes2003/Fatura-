<?php
require_once 'BaseAuthController.php';

class HomeController extends BaseAuthController{
    public function index(){

        $this->loginFilter();
        $user = User::find_by_username($_SESSION);
        
        if(isset($_SESSION['administrador'])||isset($_SESSION['funcionario'])){
           
            $this->renderView('home/index',['user'=>$user]);
        }elseif(isset($_SESSION['cliente'])){
            $this->renderViewcliente('home/indexcliente',['user'=>$user]);
        }
        
    }
}