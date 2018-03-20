<?php

/** @var Route $router */
$router->post('contentstore/store', [
    'as' => 'web_contentstore_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
