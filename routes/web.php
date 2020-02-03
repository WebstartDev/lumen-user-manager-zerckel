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
$router->get('/', function (){
    return ;
});

$router->delete('/users/{id}', 'UsersController@deleteUser');

$router->get('/users', 'UsersController@showAllUsers');
$router->get('/users/create', function (){
    return view('create');
});
$router->post('/users', 'UsersController@createUser');
$router->get('/users/{id}', 'UsersController@showUser');


$router->get('/api/users', 'apiController@getAllUser');
$router->get('/api/users/{id}', 'apiController@getUser');


