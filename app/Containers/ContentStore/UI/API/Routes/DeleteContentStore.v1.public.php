<?php

/**
 * @apiGroup           ContentStore
 * @apiName            deleteContentStore
 *
 * @api                {DELETE} /v1/contentstore/:id Endpoint title here..
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
$router->delete('contentstore/{id}', [
    'as' => 'api_contentstore_delete_content_store',
    'uses'  => 'Controller@deleteContentStore',
    'middleware' => [
      'auth:api',
    ],
]);
