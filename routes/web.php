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

$router->get('/', function () use ($router) {
    /*return $router->app->version();*/
    return 'hello word';
});

$router->get('foo', function () use ($router) {
    /*return $router->app->version();*/
    return 'hello word';
});

$router->get('user/{id}', function ($id) {
    return 'User '.$id;
});

$router->get('users', 'UsuarioController@all');
$router->post('create', 'UsuarioController@createUser');
$router->post('update', 'UsuarioController@updateUser');
$router->post('delete', 'UsuarioController@deleteUser');