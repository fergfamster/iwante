<?php

namespace App\Containers\ContentStore\Tasks;

use App\Containers\ContentStore\Data\Repositories\ContentStoreRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateContentStoreTask extends Task
{

    protected $repository;

    public function __construct(ContentStoreRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
