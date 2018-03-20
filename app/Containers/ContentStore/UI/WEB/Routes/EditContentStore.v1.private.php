<?php

/** @var Route $router */
$router->get('contentstore/{id}/edit', [
    'as' => 'web_contentstore_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
