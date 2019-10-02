<?php

namespace App\Classes;


class BenAmigo
{
    private $type = array('request','receiver');
    
    public function conectar_benamigos($eu , $amigo ){
      //echo $codigo; 
      $benamigo = new \App\BenAmigo;
      $benamigo->eu = $eu;
      $benamigo->amigo = $amigo; 
      $benamigo->relationship = 1;
      $benamigo->status = 1;
      $benamigo->save();

    }

    public function listar_amigos($codigo ){
      $eus = \App\BenAmigo::where('eu',$codigo)->get()->toArray();
      $amigos = \App\BenAmigo::where('amigo',$codigo)->get()->toArray(); 

      $meus_bens = array();
      //$result = array_merge($eus, $amigos);
      foreach ($eus as $eu) {
      	$eu_ben_amigo = \App\User::where('user_token',$eu['amigo'])->first()->toArray();
      	$meus_bens[] = array(
      		'nome' => $eu_ben_amigo['name'],
      		'email' => $eu_ben_amigo['email'],
      		'user_token' => $eu_ben_amigo['user_token'] 
      	);

      }

      foreach ($amigos as $amigo) {
        $eu_ben_amigo = \App\User::where('user_token',$amigo['eu'])->first();
        if($eu_ben_amigo){
        	$eu_ben_amigo_array = $eu_ben_amigo->toArray();
        	$meus_bens[] = array(
        		'nome' => $eu_ben_amigo_array['name'],
        		'email' => $eu_ben_amigo_array['email'],
        		'user_token' => $eu_ben_amigo_array['user_token'] 
        	);
          
        }

      }
      
      return $meus_bens;
    }

}
