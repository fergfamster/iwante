<?php

/** @var Route $router */
$router->get('galleries', [
    'as' => 'web_gallery_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
