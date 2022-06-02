<?php
//require_once 'controller/BookController.php';  
//require_once 'controller/PlanoController.php';
//require_once 'controller/AuthController.php';

require_once 'startup/boot.php';

$rota = '';

if (isset($_GET['r']))
    $rota = $_GET['r'];

$id = '';

if (isset($_GET['id']))
    $id = $_GET['id'];


switch ($rota) {
    case 'iva/index':
        require_once 'controller/IvaController.php';
        $IvaController = new IvaController();
        $IvaController->index();
        break;
    case 'iva/show':
        require_once 'controller/IvaController.php';
        $IvaController = new IvaController();
        $IvaController->show($id);
        break;
    case 'iva/edit':
        require_once 'controller/IvaController.php';
        $IvaController = new IvaController();
        $IvaController->edit($id);
        break;
    case 'iva/update':
        require_once 'controller/IvaController.php';
        $IvaController = new IvaController();
        $IvaController->update($id);
        break;
    case 'iva/delete':
        require_once 'controller/IvaController.php';
        $IvaController = new IvaController();
        $IvaController->delete($id);
        break;
    case 'iva/create':
        require_once 'controller/IvaController.php';
        $IvaController = new IvaController();
        $IvaController->create();
        break;
    case 'iva/store':
        require_once 'controller/IvaController.php';
        $IvaController = new IvaController();
        $IvaController->store();
        break;
    case 'empresa/update':
        require_once 'controller/EmpresaController.php';
        $EmpresaController = new EmpresaController();
        $EmpresaController->update();
        break;
    case 'empresa/atualizar':
        require_once 'controller/EmpresaController.php';
        $EmpresaController = new EmpresaController();
        $EmpresaController->editar();
        break;
    case 'store/cliente':
        require_once 'controller/ClienteController.php';
        $ClienteController = new ClienteController();
        $ClienteController->store();
        break;
    case 'criar/cliente':
        require_once 'controller/ClienteController.php';
        $ClienteController = new ClienteController();
        $ClienteController->create();
        break;
    case 'atualizar/update':
        require_once 'controller/AtualizarController.php';
        $AtualizarController = new AtualizarController();
        $AtualizarController->update();
        break;
    case 'atualizar':
        require_once 'controller/AtualizarController.php';
        $AtualizarController = new AtualizarController();
        $AtualizarController->editar();
        break;
    case 'login':
        require_once 'controller/AuthController.php';
        $AuthController = new AuthController();
        $AuthController->loginController();
        break;
    case 'logout':
        require_once 'controller/AuthController.php';
        $AuthController = new AuthController();
        $AuthController->logoutController();
        break;
    case 'plano':
        require_once 'controller/PlanoController.php';
        $PlanoController = new PlanoController();
        $PlanoController->index();
        break;
        //Criar um home geral
    default:
        require_once 'controller/HomeController.php';
        $HomeController = new HomeController();
        $HomeController->index();
}
