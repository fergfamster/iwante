<?php

/** @var Route $router */
$router->patch('contentstore/{id}', [
    'as' => 'web_contentstore_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
