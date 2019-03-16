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
    return $router->app->version();
});
$router->post('/artikel', 'ArtikelController@create');
$router->get('/artikel', 'ArtikelController@read');
$router->get('/artikel/{id}', 'ArtikelController@getDetail');
$router->post('/artikel/{id}', 'ArtikelController@update');
$router->delete('/artikel/{id}', 'ArtikelController@delete');
