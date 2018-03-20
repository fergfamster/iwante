<?php

namespace App\Containers\ContentStore\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllContentStoresAction extends Action
{
    public function run(Request $request)
    {
        $contentstores = Apiato::call('ContentStore@GetAllContentStoresTask', [], ['addRequestCriteria']);

        return $contentstores;
    }
}
