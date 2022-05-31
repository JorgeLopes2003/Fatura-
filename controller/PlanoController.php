<?php
require_once 'BaseAuthController.php';
class PlanoController extends BaseAuthController
{
    public function index()
    {
        $this->loginFilter();
        
        $this->redirect();
       


    }

}
