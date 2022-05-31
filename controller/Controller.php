<?php
class Controller
{
    public function redirect($rota = '')
    {
        $url = 'index.php';
        if ($rota)
            $url = 'index.php?r=' . $rota;
        header("Location: $url"); 
    } //redirect -> a rota é a opção do switch (index.php)


    public function renderView($view, $params = [])
    {
        extract($params);
        require_once "views/layouts/header.php";
        require_once "views/$view.php";
        require_once "views/layouts/footer.php";
    } //renderView -> é a pasta/ficheiro que se pretende mostrar

    public function renderViewcliente($view, $params = [])
    {
        extract($params);
        require_once "views/layouts/headercliente.php";
        require_once "views/$view.php";
        require_once "views/layouts/footer.php";
    } //renderView -> é a pasta/ficheiro que se pretende mostrar



}
