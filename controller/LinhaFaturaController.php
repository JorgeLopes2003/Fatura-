<?php

require_once 'controller/BaseAuthController.php';

class LinhaFaturaController extends BaseAuthController
{


    public function create($id)
    { // irá ter 2 tipos de stores 

        $this->loginFilter();

        $user = User::find_by_username($_SESSION);
        $fatura = Fatura::find([$id]);
        $linhafatura = Linhafatura::all();
        $produto = produto::all();
        $save = true ;

        if (is_null($user) || is_null($fatura) || is_null($linhafatura) || is_null($produto)) {

            $this->redirect();
        } else {
            if ($user->role == 1 || $user->role == 2) {

                $this->renderview('User/LinhaFatura/create', ['fatura' => $fatura, 'linhafatura' => $linhafatura, 'produto' => $produto,'save'=>$save]); //Apresentar a vista para crear

            } else {

                $this->renderViewcliente('home/indexcliente');
            }
        }
    }


    public function store($id)
    {
        $this->loginFilter();

        $userlogged = User::find_by_username($_SESSION);
        $user = User::all();
        $empresa = Empresa::find_by_designacao_social('Fatura+'); 
        $fatura = Fatura::find([$id]);
        $linhafatura = Linhafatura::all();
        
        $produto = Produto::find_by_descricao($_POST['descricao']);
        $iva = Iva::all();
        $save = false;
        
        if (!is_null($userlogged) || !is_null($fatura) || !is_null($linhafatura)||!is_null($produto)||!is_null($user)) {
            if ($userlogged->role == 1 || $userlogged->role == 2) {
                $linhafatura = new Linhafatura();
                
                    $Produto_Stock = $produto->stock;
                    $Produto_Stock -=$_POST['quantidade'];
                    if($Produto_Stock < 0){
                        $this->renderView('User/Fatura/edit', ['fatura' => $fatura,'linhafatura' => $linhafatura,'save' => $save,'empresa'=>$empresa,'user'=>$user]);
                    }
                    $linhafatura->quantidade = $_POST['quantidade'];
                    $linhafatura->valor_iva = $produto->taxavigor;
                    foreach($iva as $iva){
                        if($iva->id == $linhafatura->valor_iva){
                            $linhafatura->valor_iva = $iva->percentagem ;
                        }
                    }
                    $linhafatura->valor_unitario = $produto->preco ;
                    $linhafatura->fatura_id = $fatura->id ;
                    $linhafatura->produto_id = $produto->id;
                    $produto->update_attributes(array('stock'=>$Produto_Stock));
                    $save = $produto->save();
                    if($save == true){
                        $linhafatura->save();
                        $linhafaturaEnvio = Linhafatura::all();
                        $this->renderView('User/Fatura/edit', ['fatura' => $fatura,'linhafatura' => $linhafaturaEnvio,'save' => $save,'empresa'=>$empresa,'user'=>$user]);
                    } else {
                    $this->renderview('User/LinhaFatura/create', ['fatura' => $fatura, 'linhafatura' => $linhafatura, 'produto' => $produto,'save' => $save]); //mostrar vista create passando o modelo como parâmetro
                }
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }


    public function delete($id)
    { // Adicionar de novo a quantidade ao stock  !!!!!!!!!
        $linhafatura = Linhafatura::find([$id]);

        $idfatura = $linhafatura->fatura_id;
        
        $quantidade = $linhafatura->quantidade;
        $produtoid = $linhafatura->produto_id;
        $produto = Produto::find([$produtoid]);

        $produto->stock += $quantidade;
  
        
        $produto->save();
        $linhafatura->delete();
        $linhafatura->save();

        $fatura = Fatura::find([[$idfatura]]);
        $linha = Linhafatura::all();
        $empresa = Empresa::find_by_designacao_social('Fatura+'); 
        $user= User::all();
        $this->renderView('User/Fatura/edit',['fatura'=> $fatura,'linhafatura'=>$linha,'empresa'=>$empresa,'user'=>$user]);
    }
}
