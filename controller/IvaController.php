<?php
require_once 'controller/BaseAuthController.php';
class IvaController extends BaseAuthController
{
    public function index()
    {
        $this->loginFilter();

        $iva = Iva::all();
        $user = User::find_by_username($_SESSION);
        if (isset($user) && isset($iva)) {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderView('User/GerirIva/index', ['iva' => $iva]);
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function show($id)
    {
        $this->loginFilter();

        $iva = iva::find_by_id([$id]);
        $user = User::find_by_username($_SESSION);

        if (!is_null($user) || !is_null($iva)) {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderView('User/GerirIva/show', ['iva' => $iva]);
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        } else {
            $this->redirect('iva/index');
        }
    }

    public function create()
    {
        $this->loginFilter();

        $user = User::find_by_username($_SESSION);
        $iva = Iva::all();

        if (is_null($user) || is_null($iva)) {

            $this->redirect();
        } else {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderview('User/GerirIva/create', ['iva' => $iva]); //Apresentar a vista para crear
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
                $iva = new IVA($_POST);
                if ($iva->is_valid()) {
                    $iva->save();
                    $this->redirect('iva/index');//redirecionar para o index
                } else {
                    $this->renderView('User/GerirIva/create', ['iva' => $iva]); //mostrar vista create passando o modelo como parâmetro
                }
            } else {
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function edit($id)
    {
        $this->loginFilter();


        $user = User::find_by_username($_SESSION);
        $iva = Iva::find([$id]);

        if (is_null($user) || is_null($iva)) {
            $this->redirect();
        } else {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderview('User/GerirIva/edit', ['iva' => $iva]); //Apresentar a vista para crear
            } else {

                $this->renderViewcliente('home/indexcliente');
            }
        }
    }

    public function update($id)
    {
        $this->loginFilter();
     
  
        $user = User::find_by_username($_SESSION);
        $iva = Iva::find([$id]);
        var_dump($user,$iva);
        if (!is_null($user)&&!is_null($iva)) {        
            if ($user->role == 1 || $user->role == 2) {
                if($iva->is_valid()){
                    $iva->update_attributes($_POST);
                    $iva->save();

                    $this->redirect('iva/index'); //redirecionar para o index
                }else{
                    $this->renderView('User/GerirIva/edit', ['iva' => $iva]); //VISTA ATUALIZAR ADMINISTRADOR
                }   
            }else{
                $this->renderViewcliente('home/indexcliente');
            }
        }else{
            $this->redirect(); 
        }
    }

    public function delete($id)
    {
        $iva = Iva::find([$id]);
        $iva->delete();
        $this->redirect('iva/index');
    }
}
