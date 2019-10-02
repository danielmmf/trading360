<?php 
// These lignes will be added
/**
 * Routes for resource user
 */
$router->get('admin/home', 'AdminController@home');
$router->get('admin/matriculas', 'AdminController@matriculas');
$router->get('admin/matricula/{id}', 'AdminController@matricula');
$router->get('api/v1/matriculas', 'AdminController@list_matriculas');
$router->post('user', 'UsersController@add');
$router->post('api/360/v1/user/add', 'Api360Controller@add_user');
