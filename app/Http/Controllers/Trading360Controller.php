<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Trading360Controller extends Controller {

	private $actions;

    const MODEL = "App\User";

    use RESTActions;


    public function validar(Request $request, $token){
        $usuario = \App\User::where('user_token',$token)->first();
        //print_r($usuario);

        $app_name = env('APP_NAME', '360');
    	$app_view = env('APP_VIEW', '360');
    	return view($app_view.'/validar', ['app_name' => $app_name , 'usuario_name'=>$usuario->name, 'user_token'=>$token]);

    }

    public function setar(){
        $usuario = \App\User::where('user_token',$_POST['user_token'])->first();
        if (is_null($usuario)) {
            return $this->respond(Response::HTTP_NOT_FOUND);
        }

        $usuario->password = $_POST['senha'];
        $resposta = array();
        $resposta['status'] = 0;
        try {
        	$usuario->save();
        	$resposta['status'] = 1;
        	$resposta['user_token'] = $_POST['user_token'];
        	$resposta['msg'] = "Senha alterada com sucesso";
        } catch (Exception $e) {
        	$resposta['msg'] = $e->getMessage();
        }

        return $this->respond(Response::HTTP_OK, $resposta);

    }


    public function pagina(Request $request, $token){
        $usuario = \App\User::where('user_token',$token)->first();
        //print_r($usuario);

        $app_name = env('APP_NAME', '360');
    	$app_view = env('APP_VIEW', '360');
    	return view($app_view.'/aluno',['app_name' => $app_name , 'usuario_name'=>$usuario->name, 'usuario_email'=>$usuario->email,'usuario_telefone'=>$usuario->telefone ,'user_token'=>$token]);

    }

    public function login(){

        $user = new \App\Classes\User;
        $user->email = $_POST['login-form-username'];
        $user->password = $_POST['login-form-password'];
        $response = $user->login();
        
        return response()->json($response);
        
        //return $this->respond(Response::HTTP_OK, $resposta);
    }


}
