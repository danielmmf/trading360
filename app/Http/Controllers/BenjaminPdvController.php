<?php namespace App\Http\Controllers;

class BenjaminPdvController extends Controller {

	private $actions;

	public function __construct()
	{
		$this->actions = array(
		'pwa'=>array('view'=>'client/index','js'=>'client/login','navbar'=>'navbar'),
		'qrunidade'=>array('view'=>'client/qrunidade','js' => 'client/logado' , 'navbar'=>'client/navbar'),
		'select'=>array('view'=>'client/select','js' => 'client/logado' , 'navbar'=>'client/navbar'),
		'cardapio'=>array('view'=>'client/cardapio','js' => 'client/add_cart' , 'navbar'=>'client/navbar_cart'),
		'carrinho'=>array('view'=>'client/carrinho','js' => 'client/cart' , 'navbar'=>'client/navbar_hist'),
		'historico'=>array('view'=>'client/historico','js' => 'client/history' , 'navbar'=>'client/navbar_cart')
		);
	}

    public function listar_pagamentos()
    {
        return view('benjamin/index', ['partial'=>'pdv/pedidos','navbar'=>'navbar' , 'js_view'=> 'pdv/pedidos','loja'=>1 , 'cliente'=> 1]);
    }

    public function listar_notas()
    {
        return view('benjamin/index', ['partial'=>'pdv/notas','navbar'=>'navbar' , 'js_view'=> 'pdv/notas','loja'=>1 , 'cliente'=> 1]);
    }

    public function pagamentos(){  
        $pagamentos =  \App\Payment::all();
        print_r($pagamentos->toJson());

       // return $this->chamar_get('pwa');
    }

    public function registrar_nfe($pagamento){      

        return view('benjamin/index', ['partial'=>'pdv/qrnota','navbar'=>'navbar' , 'js_view'=> 'pdv/pedidos','loja'=>1 , 'cliente'=> 1, 'pagamento'=> $pagamento]);
    }

    public function ver_nota($pagamento){   
         $pagamento = \App\Payment::find($pagamento);
         $nota = $pagamento->nfe;   


        return view('benjamin/index', ['partial'=>'pdv/nota','navbar'=>'navbar' , 'js_view'=> 'pdv/pedidos','loja'=>1 , 'cliente'=> 1, 'pagamento'=> $pagamento]);
    }

     public function bater_nota(){    
       // print_r($_POST);
        $pagamento = \App\Payment::find($_POST['pagamento']);
        $pagamento->nfe = $_POST['nfe'];
        try {
            $pagamento->save();
            echo "1";
        } catch (Exception $e) {
            echo "0"; 
        }
        
    }

    public function pwa(){  	
    	return $this->chamar_get('pwa');
    }

  
    public function paypal(){    
        print_r($_POST);
    }

    public function select(){  	
    	return $this->chamar_get('select');
    }

    public function cardapio($loja, $cliente){  	
    	return $this->chamar_get_loja_cliente('cardapio', $loja, $cliente);
    }

    public function carrinho($loja, $cliente){  	
    	return $this->chamar_get_loja_cliente('carrinho', $loja, $cliente);
    }

     public function historico($loja, $cliente){  	
    	return $this->chamar_get_loja_cliente('historico', $loja, $cliente);
    }

    public function produtos()
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

    public function chamar_get_loja_cliente($action, $loja, $cliente){
    	$selected_action = $this->actions[$action];
    	return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja , 'cliente'=> $cliente]);
    }

    public function chamar_get($action){
    	$selected_action = $this->actions[$action];
    	return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js']]);
    }

}
