<?php

namespace App\Containers\Gallery\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindGalleryByIdAction extends Action
{
    public function run(Request $request)
    {
        $gallery = Apiato::call('Gallery@FindGalleryByIdTask', [$request->id]);

        return $gallery;
    }
}
