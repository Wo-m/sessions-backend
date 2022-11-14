<?php

namespace App\Actions;

use App\Models\ExerciseInstance;
use App\Models\Session;
use App\Models\SessionInstance;
use Lorisleiva\Actions\Concerns\AsAction;

class SaveSession
{
    use AsAction;

    public function handle(string $sessionName, SessionInstance $base, array $exerciseInstances) {
        // Save the session, with one base instance
        $session = new Session(["name" => $sessionName]);
        $session->save();

        // save base session instance
        $base->session_id = $session->id;
        $base->save();
        SaveExerciseInstance::run($base, $efforts);
        return Session::find($session->id);
    }
}
