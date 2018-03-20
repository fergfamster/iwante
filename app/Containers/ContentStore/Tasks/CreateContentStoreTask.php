<?php

namespace App\Containers\ContentStore\Tasks;

use App\Containers\ContentStore\Data\Repositories\ContentStoreRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateContentStoreTask extends Task
{

    protected $repository;

    public function __construct(ContentStoreRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
