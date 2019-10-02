<?php 

$router->get('/', function () use ($router) {
    $app_name = env('APP_NAME', '360');
    $app_view = env('APP_VIEW', '360');
    return view($app_view.'/index', ['app_name' => $app_name]);
});


$router->get('/login', function () use ($router) {
    $app_name = env('APP_NAME', '360');
    $app_view = env('APP_VIEW', '360');
    return view($app_view.'/login', ['app_name' => $app_name]);
    
});


$router->get('/land', function () use ($router) {
    $app_name = env('APP_NAME', '360');
    $app_view = env('APP_VIEW', '360');
    return view($app_view.'/index', ['app_name' => $app_name]);
    
});

$router->get('/landing', function () use ($router) {
    $app_name = env('APP_NAME', '360');
    $app_view = env('APP_VIEW', '360');
    return view($app_view.'/index', ['app_name' => $app_name]);
    
});

$router->get('/sobre', function () use ($router) {
    $app_name = env('APP_NAME', '360');
    $app_view = env('APP_VIEW', '360');
    return view($app_view.'/sobre', ['app_name' => $app_name]);
    
});

$router->get('/matricula', function () use ($router) {
    $app_name = env('APP_NAME', '360');
    $app_view = env('APP_VIEW', '360');
    return view($app_view.'/matricula', ['app_name' => $app_name]);
    
});

$router->get('/aluno', function () use ($router) {
    $app_name = env('APP_NAME', '360');
    $app_view = env('APP_VIEW', '360');
    return view($app_view.'/aluno', ['app_name' => $app_name]);
    
});



// These lignes will be added
/**
 * Routes for resource user
 */
$router->get('user', 'UsersController@all');
$router->get('user/{id}', 'UsersController@get');
$router->post('user', 'UsersController@add');
$router->post('api/360/v1/user/add', 'Api360Controller@add_user');
$router->get('matricula/validar/{token}', 'Trading360Controller@validar');
$router->get('aluno/pagina/{token}', 'Trading360Controller@pagina');
$router->post('matricula/setar', 'Trading360Controller@setar');
$router->put('user/{id}', 'UsersController@put');
$router->delete('user/{id}', 'UsersController@remove');