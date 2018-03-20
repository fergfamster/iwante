<?php

/** @var Route $router */
$router->get('contentstore', [
    'as' => 'web_contentstore_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
