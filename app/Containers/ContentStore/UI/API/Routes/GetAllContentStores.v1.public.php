<?php

/**
 * @apiGroup           ContentStore
 * @apiName            getAllContentStores
 *
 * @api                {GET} /v1/contentstore Endpoint title here..
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
$router->get('contentstore', [
    'as' => 'api_contentstore_get_all_content_stores',
    'uses'  => 'Controller@getAllContentStores',
    'middleware' => [
      'auth:api',
    ],
]);
