<?php
require_once 'BaseAuthController.php';
class AuthController extends BaseAuthController
{
    public function loginController()
    {
        require_once 'modelos/Auth.php';
        $auth = new Auth();

        $name = '';
        $pass = '';

        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }

        if (isset($_POST['pass'])) {
            $pass = $_POST['pass'];
        }
        

        
            if (($name == '' && $pass == '' )) { //correcao de erro onde iria aparecer warnings devido aos campos name e pass estarem vazios mesmo antes de inserir algo no input
                if(isset($_SESSION['cliente'])){
                    $this->renderViewcliente('login/login');
                }else
                $this->renderView('login/login');
            } else {
                if ($auth->login($name, $pass)) {
                   
                    $this->redirect('plano'); 
                }
            }
                  
        if(isset($_SESSION['administrador'])||isset($_SESSION['funcionario'])){
                    $this->renderView('login/login');
            }elseif(isset($_SESSION['cliente'])){
                    $this->renderViewcliente('login/login');
            }
        }


    public function logoutController()
    {
        require_once('modelos/Auth.php');
        $auth = new Auth();

        $auth->logout();
        $this->redirect();
    }

}
