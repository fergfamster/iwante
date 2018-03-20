<?php

namespace App\Containers\Gallery\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteGalleryAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Gallery@DeleteGalleryTask', [$request->id]);
    }
}
