<?php

namespace App\Containers\ContentStore\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindContentStoreByIdAction extends Action
{
    public function run(Request $request)
    {
        $contentstore = Apiato::call('ContentStore@FindContentStoreByIdTask', [$request->id]);

        return $contentstore;
    }
}
