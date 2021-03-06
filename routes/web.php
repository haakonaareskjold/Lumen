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

$router->get('/', fn() => view('welcome'));

$router->get('users/api/{id}', fn($id) => \App\Models\User::query()->findOrFail($id));

$router->get('users/{id}', 'UserController@show');

$router->get('users', 'UserController@index');
