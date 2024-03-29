<?php
use Illuminate\Http\Response;
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

$router->get('foo', function(){
   return "hello world";
});

$router->get('home', function () {
    return response()->json(['message' => 'Unauthorized', 'http_code' => 401], 401, ['X-Header-One' => 'Header Value']);
});
