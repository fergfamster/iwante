<?php

/** @var Route $router */
$router->delete('galleries/{id}', [
    'as' => 'web_gallery_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
