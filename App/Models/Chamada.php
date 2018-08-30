<?php

namespace App\Model;

class Chamada{
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
}