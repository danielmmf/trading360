<?php
namespace App\Classes;


class Shipiment extends \App\Shipiment
{
    private $type = array('request','receiver');
    private $pais , $pais_entrega , $cidade , $cidade_entrega , $inicio , $final;
 
   /* public function _construct($tipo, $peso, $dimensoes , $valor , $fotos, $type){
       
    }*/

    public function set_destination($pais,$cidade){
        $this->pais = $pais;
        $this->cidade = $cidade;
        return $this;
    }

    public function set_origin($pais,$cidade){
        $this->pais_entrega = $pais;
        $this->cidade_entrega = $cidade;
        return $this;
    }

    public function set_travel_window($inicio , $final){
        $this->inicio = $inicio;
        $this->final = $final;
    }
     
   public function create(){
        
        $package = new Shipiment;
        $package->origin_country = $this->pais;
        $package->origin_city = $this->cidade;
        $package->user_id = 1;
        $package->name = 'entrega';
        $package->save();
   }
}




