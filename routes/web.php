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

<<<<<<< HEAD
$router->get('/', fn() => view('welcome'));
=======
$router->get('/', function () use ($router) {
    return $router->app->basePath();
});
>>>>>>> 487dc9be2f17f3514314052b7f556ae241e0c803

$router->get('users/api/{id}', fn($id) => \App\Models\User::query()->findOrFail($id));

$router->get('users/{id}', 'UserController@show');

$router->get('users', 'UserController@index');
