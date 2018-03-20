<?php

namespace App\Containers\ContentStore\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateContentStoreAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $contentstore = Apiato::call('ContentStore@UpdateContentStoreTask', [$request->id, $data]);

        return $contentstore;
    }
}
