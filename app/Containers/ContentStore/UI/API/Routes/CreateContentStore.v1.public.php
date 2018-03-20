<?php

/**
 * @apiGroup           ContentStore
 * @apiName            createContentStore
 *
 * @api                {POST} /v1/contentstore Endpoint title here..
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
$router->post('contentstore', [
    'as' => 'api_contentstore_create_content_store',
    'uses'  => 'Controller@createContentStore',
    'middleware' => [
      'auth:api',
    ],
]);
