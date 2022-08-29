<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/todos', 'TodosController@index');
$router->post('/todos', 'TodosController@store');
$router->put('/todos/{id}', 'TodosController@update');
$router->delete('/todos/{id}', 'TodosController@destroy');

// students
$router->get('/students', 'StudentsController@index');
$router->post('/students', 'StudentsController@store');
$router->put('/students/{id}', 'StudentsController@update');
$router->delete('/students/{id}', 'StudentsController@destroy');

// class
$router->get('/classes', 'ClassController@index');
$router->post('/classes', 'ClassController@store');
$router->put('/classes/{id}', 'ClassController@update');
$router->delete('/classes/{id}', 'ClassController@destroy');
