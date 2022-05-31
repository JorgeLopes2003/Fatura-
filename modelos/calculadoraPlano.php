<?php

use Carbon\Carbon;

class calculadoraPlano{
    public function planoCheck($credito, $numPrestacao){
        return ($credito > 0) && ($numPrestacao > 0);
    }

    public function calcularPlano($credito, $numPrestacao){
        $dataNow =  Carbon::now();
        $valorPrest = $credito/$numPrestacao;
        $divida = $credito;
        $prestacoes = [];
        for($i = 1; $i <= $numPrestacao; $i++){
            $divida = $divida - $valorPrest;
            $prestacoes[] = ['Num' => $i, 'data' => $dataNow->format('d-m-Y'), 'valor' => round($valorPrest, 2), 'divida' => round($divida, 2)];
            $dataNow =  Carbon::now()->addMonth($i);
        }
        
        return $prestacoes ;
    }
}














