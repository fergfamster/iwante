<?php

namespace App\Containers\ContentStore\Tasks;

use App\Containers\ContentStore\Data\Repositories\ContentStoreRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllContentStoresTask extends Task
{

    protected $repository;

    public function __construct(ContentStoreRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
