<?php

/** @var Route $router */
$router->patch('galleries/{id}', [
    'as' => 'web_gallery_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
