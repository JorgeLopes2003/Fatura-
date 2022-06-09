<?php
require_once 'controller/BaseAuthController.php';

class Produto_StockController extends BaseAuthController
{
    public function index(){
        $this->loginFilter();

        $produto = Produto::all();
        $user = User::find_by_username($_SESSION);
        if (!is_null($user) && !is_null($produto)) {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderView('User/GerirProduto_Stock/index', ['produto' => $produto]);
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }
    public function Gerir($id)
    {
        $this->loginFilter();

        $user = User::find_by_username($_SESSION);
        $produto = Produto::find([$id]);

        if (is_null($user) || is_null($produto)) {
            $this->redirect('produto/index');
        } else {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderview('User/GerirProduto_Stock/edit', ['produto' => $produto]); //Apresentar a vista para crear
            } else {

                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function update($id)
    {
        $this->loginFilter();
     
  
        $user = User::find_by_username($_SESSION);
        $produto = Produto::find([$id]);
        if (!is_null($user)&&!is_null($produto)) {        
            if ($user->role == 1 || $user->role == 2) {
                if($produto->is_valid()){
                    $produto->update_attributes($_POST);
                    $produto->save();

                    $this->redirect('produto/index'); //redirecionar para o index
                }else{
                    $this->renderView('User/GerirProduto_Stock/edit', ['produto' => $produto]); //VISTA ATUALIZAR ADMINISTRADOR
                }   
            }else{
                $this->renderViewcliente('home/indexcliente');
            }
        }else{
            $this->redirect(); 
        }

    }
    
    public function create()
    {
        $this->loginFilter();

        $user = User::find_by_username($_SESSION);
        $produto = Produto::all();
        $iva = Iva::all();

        if (is_null($user) || is_null($produto) ||is_null($iva)) {

            $this->redirect();
        } else {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderview('User/GerirProduto_Stock/createProduct', ['produto' => $produto , 'iva'=>$iva]); //Apresentar a vista para crear
            } else {

                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function store()
    {
        $this->loginFilter();

        $userlogged = User::find_by_username($_SESSION);

        if (!is_null($userlogged)) {
            if ($userlogged->role == 1 || $userlogged->role == 2) {
                $taxa = $_POST['taxavigor'];
                $produto = new Produto($_POST);
                $produto->taxavigor = $taxa;
                if ($produto->is_valid()) {
                    $produto->save();
                    $this->redirect('produto/index'); //redirecionar para o index
                } else {
                    $this->renderView('User/GerirProduto_Stock/createProduct', ['produto' => $produto]); //mostrar vista create passando o modelo como parâmetro
                }
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }
    public function delete($id)
    {
        $produto = Produto::find([$id]);
        $produto->delete();
        $this->redirect('produto/index');
    }

}
