<?php

namespace App\Containers\Gallery\UI\WEB\Controllers;

use App\Containers\Gallery\UI\WEB\Requests\CreateGalleryRequest;
use App\Containers\Gallery\UI\WEB\Requests\DeleteGalleryRequest;
use App\Containers\Gallery\UI\WEB\Requests\GetAllGalleriesRequest;
use App\Containers\Gallery\UI\WEB\Requests\FindGalleryByIdRequest;
use App\Containers\Gallery\UI\WEB\Requests\UpdateGalleryRequest;
use App\Containers\Gallery\UI\WEB\Requests\StoreGalleryRequest;
use App\Containers\Gallery\UI\WEB\Requests\EditGalleryRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Gallery\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllGalleriesRequest $request
     */
    public function index(GetAllGalleriesRequest $request)
    {
        $galleries = Apiato::call('Gallery@GetAllGalleriesAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindGalleryByIdRequest $request
     */
    public function show(FindGalleryByIdRequest $request)
    {
        $gallery = Apiato::call('Gallery@FindGalleryByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateGalleryRequest $request
     */
    public function create(CreateGalleryRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreGalleryRequest $request
     */
    public function store(StoreGalleryRequest $request)
    {
        $gallery = Apiato::call('Gallery@CreateGalleryAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditGalleryRequest $request
     */
    public function edit(EditGalleryRequest $request)
    {
        $gallery = Apiato::call('Gallery@GetGalleryByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateGalleryRequest $request
     */
    public function update(UpdateGalleryRequest $request)
    {
        $gallery = Apiato::call('Gallery@UpdateGalleryAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteGalleryRequest $request
     */
    public function delete(DeleteGalleryRequest $request)
    {
         $result = Apiato::call('Gallery@DeleteGalleryAction', [$request]);

         // ..
    }
}
