<?php
require_once 'BaseAuthController.php';

class HomeController extends BaseAuthController{
    public function index(){

        $this->loginFilter();

        
        if(isset($_SESSION['administrador'])||isset($_SESSION['funcionario'])){
            $this->renderView('home/index');
        }elseif(isset($_SESSION['cliente'])){
            $this->renderViewcliente('home/indexcliente');
        }
        
    }
}