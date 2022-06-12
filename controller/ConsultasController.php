<?php 
require_once 'controller/BaseAuthController.php';

class ConsultasController extends BaseAuthController{
    public function index(){
        $this->loginFilter();
        
        $fatura = Fatura::all();
        $user = User::find_by_username($_SESSION);
        if (!is_null($user) && !is_null($fatura)) {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderView('User/Consultas/Administrador_Funcionario/index', ['fatura' => $fatura]);
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function show($id){

        $this->loginFilter();
        
        $fatura = Fatura::find([$id]);
        $linhafatura = Linhafatura::all();
        $empresa = Empresa::find_by_designacao_social('Fatura+');
        $user = User::find_by_username($_SESSION);
        $userAtribuido = User::all();
        if (!is_null($user) && !is_null($fatura) && !is_null($linhafatura) && !is_null($empresa)) {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderView('User/Consultas/Administrador_Funcionario/show', ['fatura' => $fatura,'linhafatura'=>$linhafatura,'empresa'=>$empresa,'user'=>$userAtribuido]);
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function indexcliente(){
        $this->loginFilter();
        
        
        $user = User::find_by_username($_SESSION);
        $fatura = Fatura::all();
        if (!is_null($user) && !is_null($fatura)) {
            if ($user->role == 3) {
                $this->renderViewcliente('User/Consultas/Cliente/index', ['fatura' => $fatura,'user'=>$user]);
            } else {
                $this->renderView('home/index');
            }
        }
    }

    public function showcliente($id){
        
        $this->loginFilter();
        
        $fatura = Fatura::find([$id]);
        $linhafatura = Linhafatura::all();
        $empresa = Empresa::find_by_designacao_social('Fatura+');
        $user = User::find_by_username($_SESSION);
        $userAtribuido = User::all();
        if (!is_null($user) && !is_null($fatura) && !is_null($linhafatura) && !is_null($empresa)) {
            if ($user->role == 3) {
                $this->renderViewcliente('User/Consultas/Cliente/show', ['fatura' => $fatura,'linhafatura'=>$linhafatura,'empresa'=>$empresa,'user'=>$userAtribuido]);
            } else {
                $this->renderView('home/index');
            }
        }
    }
}