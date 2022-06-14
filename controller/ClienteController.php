<?php
require_once 'controller/BaseAuthController.php';

class ClienteController extends BaseAuthController
{
    public function create()
    {
        $this->loginFilter();

        $user = new User();

        if (is_null($user)) {
            $this->redirect();
        } else {
            if (isset($_SESSION['administrador']) || isset($_SESSION['funcionario'])) {
                
                $this->renderview('User/Cliente/create', ['user' => $user]); //Apresentar a vista para crear
                
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function store()
    {
        $this->loginFilter();

        $userlogged = User::find_by_username($_SESSION);

        if (isset($userlogged)) {
            if ($userlogged->role == 1 || $userlogged->role == 2) {
                $user = new User($_POST);
                $user->nif = $_POST['nif'];
                $user->password = $_POST['password'];
                $hash = password_hash($user->password, PASSWORD_DEFAULT);
                $user->password = $hash;
                if(strlen($user->nif) == 9){
                    $user->role = 3;
                }else{
                    $error = "insira 9 caracteres para o nif !";
                    $this->renderView('User/Cliente/create', ['user' => $user,'error'=>$error]);
                }
                
                if ($user->is_valid()) {
                    $user->save();
                    $this->redirect(); //redirecionar para o index
                } else {
                    $this->renderView('User/Cliente/create', ['user' => $user]); //mostrar vista create passando o modelo como parâmetro
                }
            }else{
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }
}
