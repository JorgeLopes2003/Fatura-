<?php
require_once 'Controller.php';
class BaseAuthController extends Controller
{
    public function loginFilter()
    {
        require_once 'modelos/Auth.php';
        $auth = new Auth();

        if (isset($_SESSION['administrador'])) {
            $auth->isLoggedIn();
        } elseif (isset($_SESSION['funcionario'])) {
            $auth->isLoggedIn2();
        } elseif (isset($_SESSION['cliente'])) {
            $auth->isLoggedIn3();
        } else {
            $this->redirect(ROTA_LOGIN);
        }

        
    }

    
}
