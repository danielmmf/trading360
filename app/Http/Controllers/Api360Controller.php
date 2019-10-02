<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Api360Controller extends Controller {

	private $actions;

    const MODEL = "App\User";

    use RESTActions;


     public function add_user(Request $request){
        $user_token = md5($_POST['email']);
     
        $_POST['user_token'] = $user_token;

    	$this->validate($request, \App\User::$rules);
        $resposta = array();
        $resposta['status'] = 0;

        try {
            $usuario = \App\User::create($_POST);
            $to      = $_POST['email'];
            $subj = 'Cadastro no site Trading360';
            $message = "<h1>Olá Usuario</h1>Voce acabou de se cadastrar no site trading 360<br>
            clique no  <a href='trading360.com.br/matricula/validar/$user_token'>link </a> para validar sua conta !!! ";
            $body = "<html>\n";
            $body .= "<body style=\"font-family:Verdana, Verdana, Geneva, sans-serif; font-size:12px; color:#666666;\">\n";
            $body .= $message;
            $body .= "</body>\n";
            $body .= "</html>\n";
           
            $headers  = "From: Trading 360<contato@trading360.com.br>\r\n";
            $headers .= "Reply-To: contato@trading360.com.br\r\n";
            $headers .= "Return-Path: contato@trading360.com.br\r\n";
            $headers .= "X-Mailer: Trading360\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
               
            try {
                //mail($to, $subject, $message, $headers);
                mail($to, $subj, $body, $headers);
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            $resposta['status'] = 1;
        } catch (Exception $e) {
            $resposta['msg'] = $e->getMessage();
        }
        return $this->respond(Response::HTTP_OK, $resposta);
    }


 

}
