<?php

namespace App\Classes;




class Mula
{
    private $type = array('request','receiver');
    private $origin_country , $pais_entrega , $origin_city , $cidade_entrega , $inicio , $final;
 
    public function _construct($tipo, $peso, $dimensoes , $valor , $fotos, $type){
        echo "die modafoca";
        die();
    }

    public function set_destination($pais,$cidade){
        $this->pais_entrega = $pais;
        $this->cidade_entrega = $cidade;
        return $this;
    }

    public function set_origin($pais,$cidade){
        $this->origin_country = $pais;
        $this->origin_city = $cidade;
        return $this;
    }

    public function set_travel($travel_date){
        $this->travel_date = $travel_date;
    }
     
    public function search_packages(){
        $packages = \App\Classes\Shipiment::where('origin_country', $this->origin_country)->where('origin_city', $this->origin_city)->get();
        
        return $packages;
    }

}




