<?php

/** @var Route $router */
$router->get('galleries/create', [
    'as' => 'web_gallery_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
