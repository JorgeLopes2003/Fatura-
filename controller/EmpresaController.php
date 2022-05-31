<?php
require_once 'controller/BaseAuthController.php';

class EmpresaController extends BaseAuthController
{

    public function editar()
    {
        $this->loginFilter();


        $user = User::find_by_username($_SESSION);
        $empresa = Empresa::find_by_designacao_social('Fatura+'); // PQ só existe uma Empresa !!!! 

        if (isset($user)&&isset($empresa)) {
            if ($user->role == 1 || $user->role == 2) {
                $this->renderView('User/AtualizarEmpresa/edit', ['empresa' => $empresa]); //VISTA ATUALIZAR ADMINISTRADOR
            } else {
                $this->renderViewcliente('home/indexcliente');
            };
        }
    }

    public function update()
    {
        $this->loginFilter();

        $user = User::find_by_username($_SESSION);
        $empresa = Empresa::find_by_designacao_social("Fatura+");
        
        if (isset($user)&&isset($empresa)) {
            if ($user->role == 1 || $user->role == 2) {

                $empresa->update_attributes($_POST);
                if($empresa->is_valid()){
                    $empresa->save();

                    $this->redirect(); //redirecionar para o index
                }else{
                    $this->renderView('User/AtualizarEmpresa/edit', ['empresa' => $empresa]); //VISTA ATUALIZAR ADMINISTRADOR
                }   
            }else{
                $this->renderViewcliente('home/indexcliente');
            }
        }
    }
}
