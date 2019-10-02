<?php namespace App\Http\Controllers;

class BenjaminAttendantController extends Controller {

	private $actions;

	public function __construct()
	{
		$this->actions = array(
		'pwa'=>array('view'=>'attendant/select','js'=>'empty','navbar'=>'navbar'),
		'unidade'=>array('view'=>'attendant/unidade','js' =>'attendant/unidade' , 'navbar'=>'attendant/navbar'),
		'select'=>array('view'=>'attendant/select','js' => 'attendant/unidade' , 'navbar'=>'attendant/navbar'),
		'pedidos'=>array('view'=>'attendant/pedidos','js' => 'attendant/pedidos' , 'navbar'=>'attendant/navbar'),
		'atender'=>array('view'=>'attendant/atender','js' => 'attendant/pedidos' , 'navbar'=>'attendant/navbar'),
		'historico'=>array('view'=>'attendant/historico','js' => 'empty' , 'navbar'=>'attendant/navbar')
		);
	}

    public function pwa(){  	
    	return $this->chamar_get('pwa');
    }

    public function unidade($unidade){  	
    	return $this->chamar_get_unidade('unidade', $unidade);
    }

    public function select(){  	
    	return $this->chamar_get('select');
    }

    public function pedidos($unidade, $colaborador){  	
    	return $this->chamar_get_unidade_colaborador('pedidos', $unidade, $colaborador);
    }

    public function atender($unidade, $colaborador){    
        return $this->chamar_get_unidade_colaborador('atender', $unidade, $colaborador);
    }

    public function carrinho($loja, $cliente){  	
    	return $this->chamar_get_loja_cliente('carrinho', $loja, $cliente);
    }

     public function historico($loja, $cliente){  	
    	return $this->chamar_get_loja_cliente('historico', $loja, $cliente);
    }

    public function produtos()
    { 

    	$produtos = json_decode(file_get_contents('catalogo.json') , true);

	    $listados = array();
	    foreach ($produtos as $produto) {
	        $item = array('id' => 'nome', 'nome'=>'nome' );
	        //print_r($item);
	        $listados[$produto['Categoria']][$produto['Sub-Categoria']][$produto['PRO_CODIGO']] = $produto;

	    }
	    echo json_encode($listados);# code...
    }

    public function chamar_get_unidade_colaborador($action, $loja, $cliente){
    	$selected_action = $this->actions[$action];
    	return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'loja'=>$loja , 'cliente'=> $cliente]);
    }

    public function chamar_get_unidade($action, $unidade){
        $selected_action = $this->actions[$action];
        return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js'],'unidade'=>$unidade]);
    }

    public function chamar_get($action){
    	$selected_action = $this->actions[$action];
    	return view('benjamin/index', ['partial'=>$selected_action['view'],'navbar'=>$selected_action['navbar'] , 'js_view'=> $selected_action['js']]);
    }

}
