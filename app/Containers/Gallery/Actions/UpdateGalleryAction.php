<?php

namespace App\Containers\Gallery\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateGalleryAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $gallery = Apiato::call('Gallery@UpdateGalleryTask', [$request->id, $data]);

        return $gallery;
    }
}
