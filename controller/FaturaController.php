<?php

require_once 'controller/BaseAuthController.php';

Class FaturaController extends BaseAuthController{

    public function index(){   //index das faturas a emitir 'em lancamento'
        $this->loginFilter();

        $fatura = Fatura::all();
        $user = User::find_by_username($_SESSION);
        if (!is_null($user) && !is_null($fatura)) {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderView('User/Fatura/index', ['fatura' => $fatura]);
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function create(){ // irá ter 2 tipos de stores 
        
        $this->loginFilter();
        
        $dados_fatura = 
        [
            "estado" => "em lancamento"
        ];

        $userlogged = User::find_by_username($_SESSION);
        $user =  User::all();
        $fatura  = Fatura::create($dados_fatura);
        $fatura->referencia = $userlogged->id; 
        $fatura->data = date("Y-m-d");
        $fatura->save();
        
        $linhafatura = Linhafatura::all();
        $empresa = Empresa::find_by_designacao_social('Fatura+'); 

        if (is_null($userlogged) || is_null($fatura) ||is_null($linhafatura)||is_null($empresa)||is_null($user)) {

            $this->redirect();
        } else {
            if ($userlogged->role == 1 || $userlogged->role == 2) {
                $this->renderview('User/Fatura/create', ['fatura' => $fatura , 'linhafatura'=> $linhafatura,'empresa'=> $empresa,'user'=>$user]); //Apresentar a vista para crear
            } else {

                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function storefinalizar($id){
        $this->loginFilter();

        $userlogged = User::find_by_username($_SESSION);
        $user = User::find_by_username($_POST['referencia_cliente']);
        $fatura = Fatura::find([$id]);
        $linhafatura = Linhafatura::all();
       
        if (!is_null($userlogged)||!is_null($fatura)||!is_null($linhafatura)||!is_null($user)) {
            if ($userlogged->role == 1 || $userlogged->role == 2 ) {
                if ($fatura->is_valid()) {
                    $fatura->update_attributes($_POST);
                    $fatura->estado = "emitida";
                    $fatura->referencia_cliente = $user->id ;
                    $fatura->data = date("Y-m-d");
                    $fatura->referencia = $userlogged->id;
                    $valor = 0 ;
                    $fatura->valortotal = 0 ;
                    $fatura->iva_total = 0 ;
                    foreach($linhafatura as $linhafatura){
                        if($linhafatura->fatura_id == $fatura->id ){
                            $fatura->valortotal += ($linhafatura->valor_unitario*$linhafatura->quantidade);
                            $valor = ($linhafatura->valor_unitario*$linhafatura->quantidade)*($linhafatura->valor_iva/100);
                            $fatura->iva_total+=$valor;
                        }
                    }
                    $fatura->save();
                    $this->redirect('fatura/index'); //redirecionar para o index
                } else {
                    $this->renderView('User/Fatura/create', ['fatura' => $fatura]); //mostrar vista create passando o modelo como parâmetro
                }
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }

    }
    public function storedepois($id){
        $this->loginFilter();

        $userlogged = User::find_by_username($_SESSION);
        $user = User::find_by_username($_POST['referencia_cliente']);
        $fatura = Fatura::find([$id]);
        $linhafatura = Linhafatura::all(); //$fatura->linhafatura
        if (!is_null($userlogged) || !is_null($fatura)||!is_null($linhafatura)||!is_null($user)) {
            if ($userlogged->role == 1 || $userlogged->role == 2 ) {
                if ($fatura->is_valid()) {
                    $fatura->update_attributes($_POST);
                    $fatura->estado = "em lancamento";
                    $fatura->referencia_cliente = $user->id ;
                    $fatura->data = date("Y-m-d");
                    $fatura->referencia = $userlogged->id;
                    $valor = 0 ;
                    $fatura->valortotal = 0 ;
                    $fatura->iva_total = 0 ;
                    foreach($linhafatura as $linhafatura){
                        if($linhafatura->fatura_id == $fatura->id ){
                            $fatura->valortotal += ($linhafatura->valor_unitario*$linhafatura->quantidade);
                            $valor = ($linhafatura->valor_unitario*$linhafatura->quantidade)*($linhafatura->valor_iva/100);
                            $fatura->iva_total+=$valor;
                        }
                    }
                    $fatura->save();
                    $this->redirect('fatura/index'); //redirecionar para o index
                } else {
                    $this->renderView('User/Fatura/create', ['fatura' => $fatura]); //mostrar vista create passando o modelo como parâmetro
                }
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }

    }

    public function edit($id){
        $this->loginFilter();

        $userlogged = User::find_by_username($_SESSION);
        $user =  User::all();
        $fatura = Fatura::find([$id]);
        $linhafatura = Linhafatura::all();
        $empresa = Empresa::find_by_designacao_social('Fatura+'); 

        
        if (is_null($userlogged) || is_null($fatura) ||is_null($linhafatura)||is_null($empresa)) {

            $this->redirect();

        } else {
            if ($userlogged->role == 1 || $userlogged->role == 2) {
                $this->renderview('User/Fatura/edit', ['fatura' => $fatura , 'linhafatura'=> $linhafatura,'empresa'=> $empresa,'user'=>$user]); //Apresentar a vista para crear
            } else {

                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function delete($id){
        $fatura = Fatura::find([$id]);

        $linhafatura = Linhafatura::all();

        foreach($linhafatura as $linhafatura){
            if($linhafatura->fatura_id == $fatura->id){
                $linhafatura->delete();
            }
        }
        
        $fatura->delete();

        $this->redirect('fatura/index');
    }
}