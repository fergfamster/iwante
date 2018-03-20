<?php

/**
 * @apiGroup           ContentStore
 * @apiName            findContentStoreById
 *
 * @api                {GET} /v1/contentstore/:id Endpoint title here..
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
$router->get('contentstore/{id}', [
    'as' => 'api_contentstore_find_content_store_by_id',
    'uses'  => 'Controller@findContentStoreById',
    'middleware' => [
      'auth:api',
    ],
]);
