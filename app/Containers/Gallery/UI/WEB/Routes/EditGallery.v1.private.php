<?php

/** @var Route $router */
$router->get('galleries/{id}/edit', [
    'as' => 'web_gallery_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
