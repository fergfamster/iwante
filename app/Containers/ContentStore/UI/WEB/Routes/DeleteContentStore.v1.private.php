<?php

/** @var Route $router */
$router->delete('contentstore/{id}', [
    'as' => 'web_contentstore_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
