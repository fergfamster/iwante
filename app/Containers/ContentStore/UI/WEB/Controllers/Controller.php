<?php

namespace App\Containers\ContentStore\UI\WEB\Controllers;

use App\Containers\ContentStore\UI\WEB\Requests\CreateContentStoreRequest;
use App\Containers\ContentStore\UI\WEB\Requests\DeleteContentStoreRequest;
use App\Containers\ContentStore\UI\WEB\Requests\GetAllContentStoresRequest;
use App\Containers\ContentStore\UI\WEB\Requests\FindContentStoreByIdRequest;
use App\Containers\ContentStore\UI\WEB\Requests\UpdateContentStoreRequest;
use App\Containers\ContentStore\UI\WEB\Requests\StoreContentStoreRequest;
use App\Containers\ContentStore\UI\WEB\Requests\EditContentStoreRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\ContentStore\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllContentStoresRequest $request
     */
    public function index(GetAllContentStoresRequest $request)
    {
        $contentstores = Apiato::call('ContentStore@GetAllContentStoresAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindContentStoreByIdRequest $request
     */
    public function show(FindContentStoreByIdRequest $request)
    {
        $contentstore = Apiato::call('ContentStore@FindContentStoreByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateContentStoreRequest $request
     */
    public function create(CreateContentStoreRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreContentStoreRequest $request
     */
    public function store(StoreContentStoreRequest $request)
    {
        $contentstore = Apiato::call('ContentStore@CreateContentStoreAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditContentStoreRequest $request
     */
    public function edit(EditContentStoreRequest $request)
    {
        $contentstore = Apiato::call('ContentStore@GetContentStoreByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateContentStoreRequest $request
     */
    public function update(UpdateContentStoreRequest $request)
    {
        $contentstore = Apiato::call('ContentStore@UpdateContentStoreAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteContentStoreRequest $request
     */
    public function delete(DeleteContentStoreRequest $request)
    {
         $result = Apiato::call('ContentStore@DeleteContentStoreAction', [$request]);

         // ..
    }
}
