<?php

namespace App\Containers\ContentStore\UI\API\Controllers;

use App\Containers\ContentStore\UI\API\Requests\CreateContentStoreRequest;
use App\Containers\ContentStore\UI\API\Requests\DeleteContentStoreRequest;
use App\Containers\ContentStore\UI\API\Requests\GetAllContentStoresRequest;
use App\Containers\ContentStore\UI\API\Requests\FindContentStoreByIdRequest;
use App\Containers\ContentStore\UI\API\Requests\UpdateContentStoreRequest;
use App\Containers\ContentStore\UI\API\Transformers\ContentStoreTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\ContentStore\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateContentStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createContentStore(CreateContentStoreRequest $request)
    {
        $contentstore = Apiato::call('ContentStore@CreateContentStoreAction', [$request]);

        return $this->created($this->transform($contentstore, ContentStoreTransformer::class));
    }

    /**
     * @param FindContentStoreByIdRequest $request
     * @return array
     */
    public function findContentStoreById(FindContentStoreByIdRequest $request)
    {
        $contentstore = Apiato::call('ContentStore@FindContentStoreByIdAction', [$request]);

        return $this->transform($contentstore, ContentStoreTransformer::class);
    }

    /**
     * @param GetAllContentStoresRequest $request
     * @return array
     */
    public function getAllContentStores(GetAllContentStoresRequest $request)
    {
        $contentstores = Apiato::call('ContentStore@GetAllContentStoresAction', [$request]);

        return $this->transform($contentstores, ContentStoreTransformer::class);
    }

    /**
     * @param UpdateContentStoreRequest $request
     * @return array
     */
    public function updateContentStore(UpdateContentStoreRequest $request)
    {
        $contentstore = Apiato::call('ContentStore@UpdateContentStoreAction', [$request]);

        return $this->transform($contentstore, ContentStoreTransformer::class);
    }

    /**
     * @param DeleteContentStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteContentStore(DeleteContentStoreRequest $request)
    {
        Apiato::call('ContentStore@DeleteContentStoreAction', [$request]);

        return $this->noContent();
    }
}
