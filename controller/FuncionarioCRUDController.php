<?php
require_once 'controller/BaseAuthController.php';

//

class FuncionarioController extends BaseAuthController
{
    public function index()
    {
        $user = User::all();  //mostrar a vista index passando os dados por parâmetro

        $this->renderView('User/index', ['users' => $user]); //Apresentar a vista show com os parametros de 'books'
    }

    public function show($id)
    {
        $user = User::find([$id]);
        if (is_null($user)) {
            $this->redirect(); //Redirecionamento para a pagina standart caso ERRO
        } else {
            $this->renderView('User/show', ['users' => $user]); //Apresentar a vista show com os parametros de 'books'
        }
    }

    public function create()
    {
        $user = User::all();
        if(is_null($user)){
            $this->redirect();
        }else{
            $this->renderview('User/create',['users' => $user ]); //Apresentar a vista para crear 
        }
    }

    public function store()
    {
        $user = new User($_POST);
        if ($user->is_valid()) {
            $user->save();
            $this->redirect('User'); //redirecionar para o index
        } else {
            $this->renderView('User/create', ['users' => $user]); //mostrar vista create passando o modelo como parâmetro
        }
    }

    public function edit($id)
    {
        $user = User::find([$id]);
        if (is_null($user)) {
            $this->redirect();
        } else {
            $this->renderView('User/edit', ['users' => $user]);
        }
    }

    public function update($id)
    {
        $user = User::find([$id]);
        $user->update_attributes($_POST);
        if ($user->is_valid()) {
            $user->save();
            $this->redirect('User'); //redirecionar para o index
        } else {
            $this->renderView('User/edit', ['users' => $user]); //mostrar vista edit passando o modelo como parâmetro
        }
    }

    public function delete($id)
    {
        $user = User::find([$id]);
        $user->delete();
        $this->redirect('User');//redirecionar para o index
    }
}
