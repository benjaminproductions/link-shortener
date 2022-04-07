<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->post('/getLink', [
    'uses' => 'LinkController@shortenLink',
]);

$router->get('/', [
    'uses' => 'LinkController@show',
]);
