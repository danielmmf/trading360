<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
	//$app_name = env('APP_NAME', 'site');
	//$app_view = env('APP_VIEW', 'site');
   // return view($app_view.'/index', ['app_name' => $app_name]);
	echo 'benjamin';
});

$app->get('/app/new_user', function () use ($app) {
	//$app_name = env('APP_NAME', 'site');
	//$app_view = env('APP_VIEW', 'site');
    return view($app_view.'/index', ['app_name' => $app_name]);
	
});

$app->get('produtos', 'BenjaminClientController@produtos');//mockada
$app->get('produtos/campanha/{nome}', 'BenjaminClientController@produtos_campanha');//mockada



$app->get('/pwa', 'BenjaminClientController@pwa');
$app->get('/beta', 'BenjaminClientController@beta');
$app->get('client/qrunidade', 'BenjaminClientController@qrunidade');
$app->get('client/select', 'BenjaminClientController@select');
$app->get('client/cardapio/{loja}/{cliente}', 'BenjaminClientController@cardapio');
$app->get('client/campanha/{nome}/{loja}/{cliente}', 'BenjaminClientController@campanha');
$app->get('client/carrinho/{loja}/{cliente}', 'BenjaminClientController@carrinho');
$app->get('client/historico/{cliente}/{loja}', 'BenjaminClientController@historico');
$app->get('client/perfil/{cliente}/{loja}', 'BenjaminClientController@perfil');

$app->get('attendant', 'BenjaminAttendantController@select');
$app->get('attendant/{unidade}', 'BenjaminAttendantController@unidade');
$app->get('attendant/pedidos/{unidade}/{colaborador}', 'BenjaminAttendantController@pedidos');
$app->get('attendant/atender/{unidade}/{colaborador}', 'BenjaminAttendantController@atender');


$app->post('/caixa/cobrar', function () use ($app) {
    // return view('caixa/cobrancas', ['loja' => $loja]);

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata , true);

    $nome = $request['nome'];
    $cartao = $request['cartao'];
    $valor = $request['valor'];
 
/*
    $environment = \Rede\Environment::sandbox();
    // Configuração da loja
    $store = new \Rede\Store('10002466', '0556abce8ba144c787f9dad825a35bd2',$environment);
    // Transação que será autorizada
    $transaction = (new \Rede\Transaction($valor, 'pedido' . time()))->creditCard(
        $request['cartao'],
        '235',
        '12',
        '2020',
        $nome
    );

    // Autoriza a transação
    $transaction = (new \Rede\eRede($store))->create($transaction);
    if ($transaction->getReturnCode() == '00') {*/
        printf("Transação autorizada com sucesso; tid=%s\n", time());
   /* }else{
        var_dump($transaction);
    }*/
});

$app->get('caixa/paypal', 'BenjaminPdvController@paypal');


$app->get('/admin/', function () use ($app) {
    return view('admin', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});

$app->get('/app/', function () use ($app) {
    return view('app', ['app_name' => 'app de teste']);
});

$app->get('/api/', function () use ($app) {
    return 'retorno do teste de api';
});

$app->get('/site/', function () use ($app) {
    return 'retorno do teste de api';
});

//vamos deixar exemplos de funcionalidades aqui
$app->get('/lab/', function () use ($app) {
    return 'retorno do teste de api';
});



$app->get('admin/home', 'AdminController@home');




/**
 * fazer uma funcao pra habilitar o rest por config :: "group,user" 
 */


$app->get('group', 'GroupsController@all');
$app->get('group/{id}', 'GroupsController@get');
$app->post('group', 'GroupsController@add');
$app->put('group/{id}', 'GroupsController@put');
$app->delete('group/{id}', 'GroupsController@remove');
