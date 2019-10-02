<?php namespace App\Http\Controllers;

class BenjaminClientController extends Controller {

    private $actions;

    public function __construct()
    {
        $this->actions = array(
        'preloading'=>array('view'=>'client/preloading','js'=>'client/preloading','navbar'=>'navbar'),
        'pwa'=>array('view'=>'client/index','js'=>'client/login','navbar'=>'navbar'),
        'conectar'=>array('view'=>'client/conectar','js'=>'client/conectar','navbar'=>'navbar'),
        'termos'=>array('view'=>'client/termos','js'=>'empty','navbar'=>'navbar'),
        'logar_phone'=>array('view'=>'client/logar_phone','js'=>'client/celular','navbar'=>'navbar'),
        'registrar'=>array('view'=>'client/registrar','js'=>'client/registrar','navbar'=>'navbar'),
        'indicado'=>array('view'=>'client/registrar','js'=>'client/indicado','navbar'=>'navbar'),
        'login'=>array('view'=>'client/login_app','js'=>'client/logar_app','navbar'=>'navbar'),
        'beta'=>array('view'=>'client/beta','js'=>'client/location','navbar'=>'navbar'),
        'qrunidade'=>array('view'=>'client/qrunidade','js' => 'client/logado' , 'navbar'=>'navbar'),
        'select'=>array('view'=>'client/select','js' => 'client/logado' , 'navbar'=>'navbar'),
        'cardapio'=>array('view'=>'client/cardapio','js' => 'client/add_cart' , 'navbar'=>'client/navbar_cart'),
        'home'=>array('view'=>'client/home','js' => 'client/add_cart' , 'navbar'=>'client/navbar_cart'),
        'qr'=>array('view'=>'client/qr','js' => 'client/add_cart' , 'navbar'=>'client/navbar_cart'),
        'combos'=>array('view'=>'client/combos','js' => 'client/combos' , 'navbar'=>'client/navbar_cart'),
        'creditos'=>array('view'=>'client/creditos','js' => 'client/creditos' , 'navbar'=>'client/navbar_cart'),
        'sub_cardapio'=>array('view'=>'client/cardapio_1','js' => 'client/add_cart,client/campanha_produtos' , 'navbar'=>'client/navbar_cart'),
        'carrinho'=>array('view'=>'client/carrinho','js' => 'client/cart' , 'navbar'=>'client/navbar_cart'),
        'creditar'=>array('view'=>'client/creditar','js' => 'client/creditar' , 'navbar'=>'client/navbar_hist'),
        'historico'=>array('view'=>'client/historico','js' => 'client/history' , 'navbar'=>'client/navbar_cart'),
        'retirar'=>array('view'=>'client/retirar','js' => 'client/retirar' , 'navbar'=>'client/navbar_cart'),
        'history'=>array('view'=>'client/history','js' => 'client/historico' , 'navbar'=>'client/navbar_cart'),
        'transito'=>array('view'=>'client/transito','js' => 'client/transito' , 'navbar'=>'client/navbar_cart'),
        'perfil'=>array('view'=>'client/perfil','js' => 'client/history' , 'navbar'=>'client/navbar_cart'),
        'bencreditos'=>array('view'=>'client/bencreditos','js' => 'client/history' , 'navbar'=>'client/navbar_cart'),
        'adicionar_bem'=>array('view'=>'client/adicionar','js' => 'client/history' , 'navbar'=>'client/navbar_cart'),
        'ler_amigo'=>array('view'=>'client/leramigo','js' => 'client/logado' , 'navbar'=>'navbar'),
        );
    }

    public function preloading(){      
        return $this->chamar_get('preloading');
    }

    public function pwa(){      
        return $this->chamar_get('pwa');
    }

    public function registrar(){      
        $selected_action = $this->actions['registrar'];
        return view('benjamin/indexsemfooter', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js']]);
    }

    public function conectar(){      
        $selected_action = $this->actions['conectar'];
        return view('benjamin/indexsemfooter', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js']]);
    }

    public function descontar_wallet()
    {
        header('Content-Type: application/json'); 
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata , true);

        $me =  \App\User::where('user_token',$_SESSION['usuario_logado']['user_token'])->first();
        $transfer = new \App\Classes\Transfer;
        $retorno = $transfer->pagar($me->id ,$request['loja'] , $request['valor_desconto']);
        print_r(json_encode($retorno));
    }

    public function indicado($amigo){   

        $selected_action = $this->actions['indicado'];
        return view('benjamin/indexsemfooter', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] ,'amigo'=>$amigo , 'js_view'=> $selected_action['js']]);
    }

    public function adicionar_bem($loja){   
        $action = 'adicionar_bem';       
        $selected_action = $this->actions[$action];
        $me = "[]";
        $amigos = "[]";

        $me =  \App\User::where('user_token',$_SESSION['usuario_logado']['user_token'])->first()->toJson();
        
        $amigos = \App\User::where('parent_user',$_SESSION['usuario_logado']['user_token'])->get()->toJson();

        $nome ='Perfil';
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome,  'indicados' =>$amigos ,  'me' =>$me]);   

    }

    public function ler_amigo($loja){   
        return $this->chamar_get('ler_amigo');
    }

    public function termos(){   
        return $this->chamar_get('termos');
    }

    public function celular(){      
        return $this->chamar_get('logar_phone');
    }

    public function retirar($loja){
        //header('Content-Type: application/json'); 
        $action = 'retirar';     

        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

        $user_token = $_SESSION['usuario_logado']['user_token'];
        
        $url = 'https://benjamin-a-padaria.firebaseio.com/users/'.$user_token.'/retirar.json';
        //print_r($url);
        //die();
        //$url = 'https://benjamin-a-padaria.firebaseio.com/users/10155806288081606/compras.json';
        //$url = 'https://benjamin-a-padaria.firebaseio.com/users/5ab4edea835919e0bc28b19dc0d5af7b/compras.json';
        $retirar = file_get_contents($url);


        $selected_action = $this->actions[$action];
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] ,'retirar'=> $retirar , 'js_view'=> $selected_action['js'], 'loja'=>$loja]);
    }

    public function history($loja){
        //header('Content-Type: application/json'); 
        $action = 'history';     
        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

        $user_token = $_SESSION['usuario_logado']['user_token'];
        
        $url = 'https://benjamin-a-padaria.firebaseio.com/users/'.$user_token.'/compras.json';
        //print_r($url);
        //die();
        //$url = 'https://benjamin-a-padaria.firebaseio.com/users/10155806288081606/compras.json';
        //$url = 'https://benjamin-a-padaria.firebaseio.com/users/5ab4edea835919e0bc28b19dc0d5af7b/compras.json';
        $retirar = file_get_contents($url);


        $selected_action = $this->actions[$action];
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] ,'retirar'=> $retirar , 'js_view'=> $selected_action['js'], 'loja'=>$loja]);
    }

    public function transito($loja){
        //header('Content-Type: application/json'); 
        $action = 'transito';     

        $user_token = $_SESSION['usuario_logado']['user_token'];
        
        $url = 'https://benjamin-a-padaria.firebaseio.com/transito/'.$loja.'/'.$user_token.'.json';
        //print_r($url);
        //die();
        //$url = 'https://benjamin-a-padaria.firebaseio.com/users/10155806288081606/compras.json';
        //$url = 'https://benjamin-a-padaria.firebaseio.com/users/5ab4edea835919e0bc28b19dc0d5af7b/compras.json';
        $retirar = file_get_contents($url);


        $selected_action = $this->actions[$action];
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] ,'retirar'=> $retirar , 'js_view'=> $selected_action['js'], 'loja'=>$loja]);
    }

    public function bemamigo($user_token){      
        $amigos = \App\User::where('parent_user',$user_token)->get()->toJson();
        print_r($amigos);

    }

    public function amigotransferir()
    {
        header('Content-Type: application/json'); 
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata , true);

        $me =  \App\User::where('user_token',$request['user_token'])->first();
        //echo $me;

        $resposta = array('nome' => $me->name ,'email' => $me->email , 'user_token'=>$request['user_token']);

        echo json_encode($resposta);

    }

    public function fazertransferencia()
    {
        header('Content-Type: application/json'); 
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata , true);
        $user_token = $_SESSION['usuario_logado']['user_token'];

        //print_r($request);
        //echo $request['valor_transferencia'];
        $me =  \App\User::where('user_token',$user_token)->first();
        //print_r($me);

        $amigo =  \App\User::where('user_token',$request['user_token'])->first();
        //print_r($amigo);

        $transfer = new \App\Classes\Transfer;
        $retorno = $transfer->transfere($me->id , $amigo->id , $request['valor_transferencia']);

        echo json_encode($retorno);

    }

    public function login(){      
        $selected_action = $this->actions['login'];
        return view('benjamin/indexsemfooter', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js']]);
    }

    public function logar()
    {
        $user = new \App\Classes\User;
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $response = $user->login();
        
        return response()->json($response);
    }

    public function subscription_id()
    {
        try {
            
            $user_token = $_SESSION['usuario_logado']['user_token'];

        //print_r($request);
        //echo $request['valor_transferencia'];
        $user =  \App\User::where('user_token',$user_token)->first();
            $user->subscription_id = $_POST['id'];
            $user->save();
            echo "OK";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function notificar_pedido()
    {
        try {
            
            $user_token = $_POST['user'];

        //print_r($request);
        //echo $request['valor_transferencia'];
        $user =  \App\User::where('user_token',$user_token)->first();

            


            $api_key = "AAAAhvFtF9A:APA91bES6WRxy_X69FiQt8uBi-DYQz4_x29MTJJX_fDNLMIM-q8eQ8VQRXyeia4XQs6rYuCgFlOORMLIIGzC6Apno0U9TFFtebK4LzLpTQ4Q7QT3XN5gyPZuxmoF9G9Qy0LszXKluO0R";
$ids = $user->subscription_id;
// Client IDs from your application
$registration_ids = array( $ids );

$message = "Pedido saindo da cozinha para a mesa !!!";

// URL to POST to
$gcm_url = 'https://android.googleapis.com/gcm/send';

// data to be posted
$fields = array(
                'registration_ids'  => $registration_ids,
                'data'              => array( "message" => $message ),
                );

// headers for the request
$headers = array( 
                    'Authorization: key=' . $api_key,
                    'Content-Type: application/json'
                );

$curl_handle = curl_init();

// set CURL options
curl_setopt( $curl_handle, CURLOPT_URL, $gcm_url );

curl_setopt( $curl_handle, CURLOPT_POST, true );
curl_setopt( $curl_handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true );

curl_setopt( $curl_handle, CURLOPT_POSTFIELDS, json_encode( $fields ) );

// send
$response = curl_exec($curl_handle);

curl_close($curl_handle);

// let's check the response
$data = json_decode($response);

foreach ($data['results'] as $key => $value) {
    if ($value['registration_id']) {
        printf("%s has a new registration id: %s\r\n", $key, $value['registration_id']);
    }
    if ($value['error']) {
        printf("%s encountered error: %s\r\n", $key, $value['error']);
    }
    if ($value['message_id']) {
        printf("%s was successfully sent, message id: %s", $key, $value['message_id']);
    }
}


        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
     public function registrar_usuario(){
        //$postdata = file_get_contents("php://input");
        //$_POST = json_decode($postdata  , true);

        if(!isset($_POST['name'])){
            $resposta  = array('mensagem' => "Nome de usuario não pode ser vazio" , 'status' => 0 , 'usuario'=>'');
            return response()->json($resposta);
        }

  
        try{
            if(! \App\User::where('email',$_POST['email'])->first()){
                $usuario = new \App\User;
                $usuario->name = $_POST['name'];
                $usuario->email = $_POST['email'];
                if(isset($_POST['parent']))
                    $usuario->parent_user = $_POST['parent'];
                $usuario->user_token = md5($_POST['email']);
                $usuario->logado = 0;
                $usuario->wallet = 0;
                $usuario->group_id = 4;
                $usuario->password = $_POST['password'];
                
                $usuario->save();
                $usuario->password = "********";
               // print_r($usuario->toJson(JSON_PRETTY_PRINT));
                $resposta  = array('mensagem' => 'O Usuario registrado com sucesso', 'status' => 1 , 'usuario'=>$usuario );
                //return true;
            }else{
                $usuario = \App\User::where('email',$_POST['email'])->first();
               
                //$usuario->save();
                $resposta  = array('mensagem' => 'O Usuario ja existe em nossa base', 'status' => 2 , 'usuario'=>$usuario);
            }
        }catch(Exception $e){
            $resposta  = array('mensagem' => $e->getMessage() , 'status' => 0 , 'usuario'=>'');
        }
       // echo 'registrar';
        return response()->json($resposta);
    }

    public function favoritos(){    
        header('Content-Type: application/json');  
        //users/c8f778faa37477eb3e7e07622990b75c
        //ce11fce876c93ed5d2a72da660496473
        $user_token = $_SESSION['usuario_logado']['user_token'];
        
        $url = 'https://benjamin-a-padaria.firebaseio.com/users/'.$user_token.'/compras.json';
        //$url = 'https://benjamin-a-padaria.firebaseio.com/users/10155806288081606/compras.json';
        //$url = 'https://benjamin-a-padaria.firebaseio.com/users/5ab4edea835919e0bc28b19dc0d5af7b/compras.json';
        $rawdata = file_get_contents($url);
        $favoritos = array();
        if ($rawdata === false) {
            echo "[]";
            die();
            exit("Unable to update data at $url");
        }

        if ($rawdata === "null") {
            echo "[]";
            die();
            exit("Unable to update data at $url");
        }

        try {
            $data = json_decode($rawdata, true);

        //echo '<pre>';
        //echo count($data);

        foreach ($data as $carrinho) {
            # code...
           // var_dump($data);
            if(is_null($carrinho)){
                foreach ($data[1] as $compras) {

                   // print_r($compras);
                   // die();
                    if(isset($compras['products'])){
                        foreach ($compras['products'] as $produto) {
                        //print_r($produto['product']);
                            # code...
                            $favoritos[$produto['product']][]=$produto['product'];
                        }
                    }

                    
                    # code...
                }
                  
            }else{
                foreach ($carrinho as $loja) {
                //foreach ($loja as $compras) {
                    //foreach ($compras as $compra) {
                        //print_r($loja);
                        if (isset($loja['products'])) {
                            foreach ($loja['products'] as $produto) {
                            //print_r($produto['product']);
                                # code...
                                $favoritos[$produto['product']][]=$produto['product'];
                            }
                        }
                        
                        # code...
                    //}

                    # code...
               // }
                # code...
            }
            }
            //var_dump($carrinho);
           // die();
            

        }
        //print_r($favoritos);
       /* foreach ($favoritos as $id => $favorito) {
            # code...
            echo $id ." : ";
            echo count($favorito);
                    echo '<hr>';
        }*/

       array_multisort(array_map('count', $favoritos), SORT_DESC, $favoritos);

       //print_r($retorno);
       //print_r($favoritos);
       $listagem = array();
       foreach ($favoritos as $key => $value) {

            $listagem[]=$value[0];

       }

       //print_r($listagem);
            echo json_encode($listagem);
        } catch (Exception $e) {
             echo "[]";
            die();
        }


        

    } 

    public function beta(){      
        return $this->chamar_get('beta');
    }

    public function qrunidade(){    
        return $this->chamar_get('qrunidade');
    }

    public function select(){   
        return $this->chamar_get('select');
    }

    public function cardapio($loja){    
        $action = 'cardapio';       
        $selected_action = $this->actions[$action];
        $nome ='Cardapio';

        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome]);
    }

    public function home($loja){    
        $action = 'home';       
        $selected_action = $this->actions[$action];
        $nome ='Cardapio';

        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome]);
    }

    public function qr($loja){    
        $action = 'qr';       
        $selected_action = $this->actions[$action];
        $nome ='Cardapio';

        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome]);
    }

    public function combos($loja){
        $action = 'combos';       
        $selected_action = $this->actions[$action];
        $nome ='Combos';
        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');
            
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome]);


    }

    public function creditos($loja){    
        $action = 'creditos';       
        $selected_action = $this->actions[$action];
        $nome ='BenCreditos';
        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome]);
    }

    public function campanha($nome , $loja, $cliente){ 
        $action = 'cardapio';       
        $selected_action = $this->actions[$action];
        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja , 'cliente'=> $cliente , 'nome' =>$nome]);
    }


     public function campanha_nome($nome , $loja){ 
        $action = 'sub_cardapio';       
        $selected_action = $this->actions[$action];
        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja , 'cliente'=> '1' , 'nome' =>$nome]);
    }

    public function carrinho($loja){  
        $action = 'carrinho';       
        $selected_action = $this->actions[$action];
        $nome ='Carrinho';

        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

        $me =  \App\User::where('user_token',$_SESSION['usuario_logado']['user_token'])->first()->toJson();

        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome,  'me' =>$me]);
    }

    public function creditar(){  
        $action = 'creditar';       
        $selected_action = $this->actions[$action];
        $nome ='Carrinho';
        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>1 ,  'nome' =>$nome]);
    }

    public function historico($loja, $cliente){     

        return $this->chamar_get_loja_cliente('historico', $loja, $cliente);
    }

    public function perfil($loja){  
        $action = 'perfil';       
        $selected_action = $this->actions[$action];
        $me = "[]";
        $amigos = "[]";

        try {
            if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

            $me =  \App\User::where('user_token',$_SESSION['usuario_logado']['user_token'])->first()->toJson();
            
        } catch (Exception $e) {
            return redirect('/login');
        }
        $amigos = \App\User::where('parent_user',$_SESSION['usuario_logado']['user_token'])->get()->toJson();
        $benamigo = new \App\Classes\BenAmigo;

        $total_amigos = $benamigo->listar_amigos($_SESSION['usuario_logado']['user_token']);
        //print_r($total_amigos);

        $nome ='Perfil';
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome,  'indicados' =>$amigos ,'benamigos' =>json_encode($total_amigos) ,   'me' =>$me]);   

       // return $this->chamar_get_loja_cliente('perfil', $loja, $cliente);
    }

    public function bencreditos($loja){  
        $action = 'bencreditos';       
        $selected_action = $this->actions[$action];
        $me = "[]";
        $amigos = "[]";
        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');

        $me =  \App\User::where('user_token',$_SESSION['usuario_logado']['user_token'])->first()->toJson();
        $amigos = \App\User::where('parent_user',$_SESSION['usuario_logado']['user_token'])->get()->toJson();
        $benamigo = new \App\Classes\BenAmigo;

        $total_amigos = $benamigo->listar_amigos($_SESSION['usuario_logado']['user_token']);
        //print_r($total_amigos);

        $nome ='BenCreditos';
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja ,  'nome' =>$nome,  'indicados' =>$amigos ,'benamigos' =>json_encode($total_amigos) ,   'me' =>$me]);   

       // return $this->chamar_get_loja_cliente('perfil', $loja, $cliente);
    }
    public function adicionar_amigo($amigo){  
        
        $benamigo = new \App\Classes\BenAmigo;

        $benamigo->conectar_benamigos($_SESSION['usuario_logado']['user_token'],$amigo);

        $eu_ben_amigo = \App\User::where('user_token',$amigo)->first()->toArray();
        $resposta = array('nome' => $eu_ben_amigo['name'], 'email' => $eu_ben_amigo['email']);
        echo "Agora vc é amigo do usuario";
        echo json_encode($resposta);
        
    }

    public function __produtos()
    { 
        $produtos = json_decode(file_get_contents('prods.json') , true);
        $listados = array();
        foreach ($produtos as $produto) {
            $item = array('id' => 'nome', 'nome'=>'nome' );
            //print_r($item);
            $listados[$produto['Categoria']][$produto['Sub-Categoria']][$produto['PRO_CODIGO']] = $produto;

        }
        echo json_encode($listados);# code...
    }

    public function produtos()
    { 
        $produtos = json_decode(file_get_contents('catalogo.json') , true);

        echo json_encode($produtos);# code...
    }

    public function promos()
    {
        echo '{
  "status": "ok",
  "totalResults": 10,
  "articles": [
    {
      "source": {
        "id": "globo",
        "name": "Globo"
      },
      "author": "Globo",
      "title": "Croissant de Chocolate",
      "description": "Croissant de Chocolate é um dos produtos mais vendidos da nossa padaria",
      "url": "https://benjamin-homolog.herokuapp.com/cardapio/1/1",
      "urlToImage": "https://s2.glbimg.com/dg3XSit8IzB6a4GYc9MWftyDbr0=/1200x/smart/filters:cover():strip_icc()/s.glbimg.com/jo/g1/f/original/2019/04/02/cabral_e_pezao_outra.jpg",
      "publishedAt": "2019-04-03T13:25:36.366Z",
      "content": "O melhor"
    },
    {
      "source": {
        "id": "globo",
        "name": "Globo"
      },
      "author": "Globo",
      "title": "Combo Suco e Sanduiche",
      "url": "https://benjamin-homolog.herokuapp.com/cardapio/1/2",
      "urlToImage": "https://s2.glbimg.com/OXbmXO2u7BvksRW_Q5rO9NQenz0=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2019/n/T/miZ2SZTB6SwaqTnUqATA/img-1460.jpg",
      "publishedAt": "2019-04-03T11:01:01.501Z",
      "content": "O melhor combo pra matar a sua fome"
    }
  ]
}';
    }


    public function ler_combos()
    { 
        $produtos = json_decode(file_get_contents('combos.json') , true);

        echo json_encode($produtos);# code...
    }

    public function produtos_id()
    { 
        $produtos = json_decode(file_get_contents('catalogo.json') , true);
        $listados = array();

        foreach ($produtos as $key => $value) {
            # code...
            $listados[$value['PRO_CODIGO']]=$value;
        }
           // print_r($listados);

        echo json_encode($listados);# code...
    }

    public function produtos_campanha_nome($nome)
    { 
        print_r($nome);
    }


    public function produtos_campanha()
    { 
        $produtos = json_decode(file_get_contents('prods.json') , true);
        shuffle($produtos);
        $limit = array(1=>6,2=>9, 3=>12);
        $total = $limit[rand(1,3)];
        //echo $total;
        $filtrados = array_slice($produtos,0,$total,true);

        echo json_encode($filtrados);# code...
    }

    public function chamar_get_loja_cliente($action, $loja, $cliente){
        if(!isset($_SESSION['usuario_logado']['user_token']))
                return redirect('/login');
        $selected_action = $this->actions[$action];
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja , 'cliente'=> $cliente]);
    }

    public function chamar_get($action){
        $selected_action = $this->actions[$action];
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js']]);
    }

    public function benamigos(){
        $benamigo = new \App\Classes\BenAmigo;
        $total_amigos = $benamigo->listar_amigos($_SESSION['usuario_logado']['user_token']);
        $benamigos = array();
        foreach ($total_amigos as $amigo) {
            $benamigos[]= array('id' => $amigo->id, 'nome' => $amigo->name);
        }

        $amigos = \App\User::where('parent_user',$_SESSION['usuario_logado']['user_token'])->get();

        foreach ($amigos as $amigo) {
            $benamigos[]= array('id' => $amigo->user_token, 'nome' => $amigo->name);
        }
        //$todo_mundo = array_merge((array)$total_amigos,(array)$amigos);

        echo json_encode($benamigos);
    }

}