<?php

namespace App\Containers\ContentStore\UI\API\Transformers;

use App\Containers\ContentStore\Models\ContentStore;
use App\Ship\Parents\Transformers\Transformer;

class ContentStoreTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param ContentStore $entity
     *
     * @return array
     */
    public function transform(ContentStore $entity)
    {
        $response = [
            'object' => 'ContentStore',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
