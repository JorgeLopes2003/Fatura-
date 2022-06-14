<?php
require_once 'controller/BaseAuthController.php';

class AtualizarController extends BaseAuthController
{

    public function editar()
    {
        $this->loginFilter();


        $user = User::find_by_username($_SESSION);

        if (isset($user)) {
            if ($user->role == 1) {
                $this->renderView('User/Atualizar/editA', ['user' => $user]); //VISTA ATUALIZAR ADMINISTRADOR
            } elseif ($user->role == 2) {
                $this->renderView('User/Atualizar/editF', ['user' => $user]); //VISTA ATUALIZAR FUNCIONARIO
            } else {
                $this->renderViewcliente('home/indexcliente');
            };
        }
    }

    public function update()
    {
        $this->loginFilter();

        $user = User::find_by_username($_SESSION);
        
        if (isset($user)) {
            if ($user->role == 1) {

                $user->update_attributes($_POST);
                $user->password = $_POST['password'];
                $hash = password_hash($user->password, PASSWORD_DEFAULT);
                $user->password = $hash;
                if($user->is_valid()){
                    $user->save();

                    $this->redirect(); //redirecionar para o index
                }else{
                    $this->renderView('User/Atualizar/editA', ['user' => $user]); //VISTA ATUALIZAR ADMINISTRADOR
                }
            } elseif ($user->role == 2) {
                
                $user->update_attributes($_POST);
                if($user->is_valid()){
                    $user->save();
                    
                    $this->redirect(); //redirecionar para o index
                }else{
                    $this->renderView('User/Atualizar/editF', ['user' => $user]); //VISTA ATUALIZAR FUNCIONARIO
                }
                
            }else{
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }
}
