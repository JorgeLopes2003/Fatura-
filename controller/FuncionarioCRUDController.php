<?php
require_once 'controller/BaseAuthController.php';

//

class FuncionarioController extends BaseAuthController
{
    public function index()
    {
        $this->loginFilter();

        $user = User::all();
        $userlogged = User::find_by_username($_SESSION);
        if (!is_null($userlogged) && !is_null($user)) {
            if ($userlogged->role == 1) {
                $this->renderView('User/GerirFuncionários/index', ['user' => $user]);
            } elseif ($userlogged->role == 2) {
                $this->renderView('home/index');
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function create()
    {
        $this->loginFilter();

        $userlogged = User::find_by_username($_SESSION);
        $user = User::all();

        if (is_null($user) || is_null($userlogged)) {
            $this->redirect('funcionario/index');
        } else {
            if ($userlogged->role == 1) {
                $this->renderview('User/GerirFuncionários/create', ['user' => $user]);
            } elseif ($userlogged->role == 2) {
                $this->renderView('home/index');
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
            if ($userlogged->role == 1 ) {
                $user= new User($_POST);
                $user->role = 2 ;
                if ($user->is_valid()) {
                    $user->save();
                    $this->redirect('funcionario/index'); //redirecionar para o index
                } else {
                    $this->renderView('User/GerirFuncionários/create', ['user' => $user]); //mostrar vista create passando o modelo como parâmetro
                }
            } elseif ($userlogged->role == 2) {
                $this->renderView('home/index');
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function edit($id)
    {
        $this->loginFilter();

        $userlogged = User::find_by_username($_SESSION);
        $user = User::find([$id]);

        if (is_null($user) || is_null($userlogged)) {
            $this->redirect('funcionario/index');
        } else {
            if ($userlogged->role == 1 ) {
                $this->renderview('User/GerirFuncionários/edit', ['user' => $user]); //Apresentar a vista para crear
            } elseif ($userlogged->role == 2) {
                $this->renderView('home/index');
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function update($id)
    {
        $this->loginFilter();
     
  
        $userlogged = User::find_by_username($_SESSION);
        $user = User::find([$id]);
        if (!is_null($userlogged)&&!is_null($user)) {        
            if ($userlogged->role == 1 ) {
                if($user->is_valid()){
                    $user->update_attributes($_POST);
                    $user->save();

                    $this->redirect('funcionario/index'); //redirecionar para o index
                }else{
                    $this->renderView('User/GerirFuncionários/edit', ['user' => $user]); //VISTA ATUALIZAR ADMINISTRADOR
                }   
            } elseif ($userlogged->role == 2) {
                $this->renderView('home/index');
            }else{
                $this->renderViewcliente('home/indexcliente');
            }
        }else{
            $this->redirect(); 
        }
    }

    public function delete($id)
    {
        $user = User::find([$id]);
        $user->delete();
        $this->redirect('funcionario/index'); //redirecionar para o index
    }
}
