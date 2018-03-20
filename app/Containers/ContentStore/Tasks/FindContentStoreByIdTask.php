<?php

namespace App\Containers\ContentStore\Tasks;

use App\Containers\ContentStore\Data\Repositories\ContentStoreRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindContentStoreByIdTask extends Task
{

    protected $repository;

    public function __construct(ContentStoreRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
