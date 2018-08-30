<?php

namespace Model;

class Data{
    public function getData(){
        $json_file = file_get_contents("Data.json");   
        $json_str = json_decode($json_file, true);
        $itens = $json_str['data'];
        return $itens;
    }

    public function getDataByIndex($index){
        $json_file = file_get_contents("Data.json");   
        $json_str = json_decode($json_file, true);
        $itens = $json_str['data'];

        $i = 0;
        foreach ( $itens as $e ){ 
            $values[$i] = $e[$index];
            $i++; 
        } 
        $values = array_unique($values);
        return $values;
    }
}
