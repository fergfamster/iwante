<?php

/** @var Route $router */
$router->post('galleries/store', [
    'as' => 'web_gallery_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
