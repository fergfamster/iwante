<?php

namespace App\Containers\Gallery\UI\API\Transformers;

use App\Containers\Gallery\Models\Gallery;
use App\Ship\Parents\Transformers\Transformer;

class GalleryTransformer extends Transformer
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
     * @param Gallery $entity
     *
     * @return array
     */
    public function transform(Gallery $entity)
    {
        $response = [
            'object' => 'Gallery',
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
