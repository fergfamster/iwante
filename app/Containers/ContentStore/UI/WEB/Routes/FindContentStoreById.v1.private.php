<?php

/** @var Route $router */
$router->get('contentstore/{id}', [
    'as' => 'web_contentstore_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
