<?php

/**
 * @apiGroup           Gallery
 * @apiName            updateGallery
 *
 * @api                {PATCH} /v1/galleries/:id Endpoint title here..
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
$router->patch('galleries/{id}', [
    'as' => 'api_gallery_update_gallery',
    'uses'  => 'Controller@updateGallery',
    'middleware' => [
      'auth:api',
    ],
]);
