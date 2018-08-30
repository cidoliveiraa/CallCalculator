<?php

namespace Controller;

class Simulador{
    
    public static function Example(){
        require("view/inicio.php");
        $teste = new \Model\Teste();
        $teste->greetz("Daniel");
    }
    public static function Index(){
        $view = new \Controller\View();
        $data = new \Model\Data();
        
        $origin = $data->getDataByIndex('origin');
        $destiny = $data->getDataByIndex('destiny');
        $view->montaView();
        require("App/Views/Simulador/index.php");
    }
    public static function Calcular(){
        //$origem  = $_GET['Origem'];
        //$destino = $_GET['Destino'];
        //$minutos = $_GET['Minutos'];
        $model = new \Model\Simulador();
        $model->getData();    
    }
}