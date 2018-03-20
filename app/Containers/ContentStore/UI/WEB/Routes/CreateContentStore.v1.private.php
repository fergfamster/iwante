<?php

/** @var Route $router */
$router->get('contentstore/create', [
    'as' => 'web_contentstore_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
