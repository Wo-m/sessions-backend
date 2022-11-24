<?php

namespace App\Actions;

use App\Http\Resources\SessionInstanceResource;
use App\Models\Instance\SessionInstance;
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
