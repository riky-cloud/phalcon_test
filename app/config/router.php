<?php

$router = $di->getRouter();

// Define your routes here
$router->add(
    "/home/{text}",
    [
        "controller" => "Todo",
        "action"     => "home",
        // "text"       => 1,
    ]
);

$router->add(
    "/",
    [
        "controller" => "Todo",
        "action"     => "home",
        // "text"       => 1,
    ]
);

// addPost
$router->notFound(
    [
        "controller" => "Todo",
        "action"     => "route404",
    ]
);

$router->add('/:controller/:action/:params', [
    'namespace' => 'App\Controllers',
    'controller' => 1,
    'action' => 2,
    'params' => 3,
]);

$router->add('/:controller', [
    'namespace' => 'App\Controllers',
    'controller' => 1
]);


$router->handle();
