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


$router->group(['prefix' => '/api/v1/dashboard'], function () use ($router) {
    $router->get('/heroes', 'DashboardController@getHeroeStats');
    $router->get('/monsters', 'DashboardController@getMonsterStats');
});

$router->group(['prefix' => '/api/v1/heroes'], function () use ($router) {
    $router->get('/races', 'HeroesController@getRaces');
    $router->get('/classes', 'HeroesController@getClasses');
    $router->get('/weapons', 'HeroesController@getWeapons');

    $router->get('', 'HeroesController@index');
    $router->get('/{id}', 'HeroesController@show');
    $router->post('', 'HeroesController@store');
    $router->put('/{id}', 'HeroesController@update');
    $router->delete('/{id}', 'HeroesController@destroy');
});


