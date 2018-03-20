<?php

/** @var Route $router */
$router->get('galleries/{id}', [
    'as' => 'web_gallery_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
