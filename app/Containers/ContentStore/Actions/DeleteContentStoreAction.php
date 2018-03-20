<?php

namespace App\Containers\ContentStore\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteContentStoreAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('ContentStore@DeleteContentStoreTask', [$request->id]);
    }
}
