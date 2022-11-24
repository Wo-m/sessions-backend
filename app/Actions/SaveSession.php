<?php

namespace App\Actions;

use App\Http\Resources\SessionResource;
use App\Models\Session;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class SaveSession
{
    use AsAction;

    public function handle($data) {
        // TODO is there a better spot for this
        DB::beginTransaction();

        // Save the session, with one base instance
        $session = new Session(["name" => $data['name']]);
        $session->save();

        // save base session instance
        $sessionInstanceData = $data['base'];
        $sessionInstanceData['session_id'] = $session->id;
        SaveSessionInstance::run($sessionInstanceData);

        DB::commit();

        return new SessionResource($session);
    }
}
