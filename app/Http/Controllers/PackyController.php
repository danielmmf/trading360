<?php namespace App\Http\Controllers;

class PackyController extends Controller {

    public function new_user(){
        
        if (!isset($_POST['email'])) {
            $resposta  = array('mensagem' => 'Email nao pode ser vazio', 'status' => 0 );
            echo json_encode($resposta);
            return ;
        }

        if (!isset($_POST['name'])) {
            $resposta  = array('mensagem' => 'Nome nao pode ser vazio', 'status' => 0 );
            echo json_encode($resposta);
            return ;
        }

        try{
            if(! \App\User::where('email',$_POST['email'])->first()){
                $usuario = new \App\User;
                $usuario->name = $_POST['name'];
                $usuario->email = $_POST['email'];
                $usuario->initial_role = isset($_POST['initial_role'])?$_POST['initial_role']:'viajante';
                $usuario->initial_message = isset($_POST['initial_message'])?$_POST['initial_message']:"...";
                $usuario->save();
                print_r($usuario->toJson(JSON_PRETTY_PRINT));
                return true;
            }else{
                $resposta  = array('mensagem' => 'O Usuario ja existe em nossa base', 'status' => 0 );
            }
        }catch(Exception $e){
            $resposta  = array('mensagem' => $e->getMessage() , 'status' => 0 );
        }
        echo json_encode($resposta);
        return false;

    }
                                                                           
    public function logar(){
        $user = new \App\Classes\User;
        $user->email = $_POST['email'];
        $user->password = $_POST['senha'];
        $response = $user->login();
        return response()->json($response);
    }

    public function registrar(){
        $postdata = file_get_contents("php://input");
        $_POST = json_decode($postdata  , true);
      //  echo '<pre>';
     //   print_r($_POST);
        try{
            if(! \App\User::where('email',$_POST['email'])->first()){
                $usuario = new \App\User;
                $usuario->name = $_POST['displayName'];
                $usuario->email = $_POST['email'];
                $usuario->profile_img = $_POST['photoURL'];
                $usuario->access_token = md5($_POST['stsTokenManager']['expirationTime'].$_POST['email']);
                $usuario->expiration_time = $_POST['stsTokenManager']['expirationTime'];
                //$usuario->initial_role = isset($_POST['initial_role'])?$_POST['initial_role']:'viajante';
                $usuario->raw_login_info = $postdata;
                $usuario->save();
               // print_r($usuario->toJson(JSON_PRETTY_PRINT));
                $resposta  = array('mensagem' => 'O Usuario registrado com sucesso', 'status' => 1 , 'usuario'=>$usuario );
                //return true;
            }else{
                $usuario = \App\User::where('email',$_POST['email'])->first();
                $usuario->raw_login_info = $postdata;
                $usuario->access_token = md5($_POST['stsTokenManager']['expirationTime'].$_POST['email']);
                $usuario->expiration_time = $_POST['stsTokenManager']['expirationTime'];
                $usuario->save();
                $resposta  = array('mensagem' => 'O Usuario ja existe em nossa base', 'status' => 2 , 'usuario'=>$usuario);
            }
        }catch(Exception $e){
            $resposta  = array('mensagem' => $e->getMessage() , 'status' => 0 , 'usuario'=>'');
        }
       // echo 'registrar';
        return response()->json($resposta);
    }

}
