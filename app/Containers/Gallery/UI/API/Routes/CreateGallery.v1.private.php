<?php

/**
 * @apiGroup           Gallery
 * @apiName            createGallery
 *
 * @api                {POST} /v1/galleries Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('galleries', [
    'as' => 'api_gallery_create_gallery',
    'uses'  => 'Controller@createGallery',
    'middleware' => [
      'auth:api',
    ],
]);
