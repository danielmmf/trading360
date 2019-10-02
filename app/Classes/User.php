<?php
namespace App\Classes;


class User extends \App\User {
	public $user;

    public function login(){
        $user = $this->where( 'email', $this->email )->first();

        $response = array();
        $response['response'] = "Login unsuccessful"; 
        $response['status'] = 0; 
        $response['group'] = 0; 

        if($user){
            if($user->password != $this->password){
                $response['response'] = "Login unsuccessful"; 
                $response['status'] = 0; 
                $response['group'] = 0; 
            }else{
                $response['response'] = "Login successful"; 
                $response['status'] = 1; 
                $response['group'] = $user->group_id ;
                $usuario['name'] = $user->name;
                $usuario['id'] = $user->id;
                $usuario['group_id'] = $user->group_id;
                $usuario['imagem'] = $user->imagem;
                $usuario['email'] = $user->email;
                $usuario['user_token'] = $user->user_token;
                $response['usuario'] = $usuario ;
                $_SESSION['logado'] = 1;
                $_SESSION['usuario_logado'] = $usuario;

                $user->logado = 1 ; 
                $user->save();
            }
        }else{
            $response['response'] = "Email does not exist"; 
            $response['status'] = 0; 
            $response['group'] = 0; 
        }

        return $response;
    }

   

    public function logados(){
        return  \App\Classes\User::where('logado', 1)->get();

    }

    public function disponiveis(){
        return  \App\Classes\User::where('disponivel', 1)->get();
    }

    
   

};
