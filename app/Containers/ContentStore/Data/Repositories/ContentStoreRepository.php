<?php

namespace App\Containers\ContentStore\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ContentStoreRepository
 */
class ContentStoreRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
