<?php

namespace App\Actions;

use App\Http\Resources\SessionInstanceResource;
use App\Http\Resources\SessionResource;
use App\Models\Session;
use App\Models\SessionInstance;
use Lorisleiva\Actions\Concerns\AsAction;

class GetBaseSession
{
    use AsAction;

    public function handle($id) {
        $base = SessionInstance::where('session_id', $id)
                                ->orderBy('created_at', 'desc')
                                ->first();
        return new SessionInstanceResource($base);
    }
}
