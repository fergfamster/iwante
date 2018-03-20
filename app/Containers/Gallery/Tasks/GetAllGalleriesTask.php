<?php

namespace App\Containers\Gallery\Tasks;

use App\Containers\Gallery\Data\Repositories\GalleryRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllGalleriesTask extends Task
{

    protected $repository;

    public function __construct(GalleryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
