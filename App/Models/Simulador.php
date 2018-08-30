<?php

namespace Model;

class Simulador{
    private $origem;
    private $destino;
    private $custo;
    
    public function getOrigem(){
        return $this->origem;
    }
    public function setOrigem($origem){
        $this->origem = $origem;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function setDestino($destino){
        $this->destino = $destino;
    }
    public function getCusto(){
        return $this->custo;
    }
    public function setCusto($custo){
        $this->custo = $custo;
    }
    public function getData(){
        $json_file = file_get_contents("Data.json");   
        $json_str = json_decode($json_file, true);
        echo var_dump($json_str);
        $itens = $json_str['data'];

        foreach ( $itens as $e ) 
            { echo $e['origin']."<br>"; } 
    }
    
}
