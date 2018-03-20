<?php

namespace App\Containers\Gallery\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllGalleriesAction extends Action
{
    public function run(Request $request)
    {
        $galleries = Apiato::call('Gallery@GetAllGalleriesTask', [], ['addRequestCriteria']);

        return $galleries;
    }
}
