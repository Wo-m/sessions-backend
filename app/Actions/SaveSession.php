<?php

namespace App\Actions;

use App\Http\Resources\SessionResource;
use App\Models\Effort;
use App\Models\ExerciseInstance;
use App\Models\Session;
use App\Models\SessionInstance;
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
        $base = new SessionInstance();
        $base->session_id = $session->id;
        $base->save();

        // save exercise instances
        foreach($data['base']['exerciseInstances'] as $instance) {
            $exerciseInstance = new ExerciseInstance($instance);
            $exerciseInstance->session_instance_id = $base->id;
            $exerciseInstance->save();

            // Save efforts
            foreach($instance['efforts'] as $effortData) {
                $effort = new Effort($effortData);
                $effort->exercise_instance_id = $exerciseInstance->id;
                $effort->save();
            }
        }
        // FIXME the data is here, need a cleaner way of obtaining it, resources
        $out = Session::find($session->id); //->sessionInstances()->first()->exerciseInstances()->first()->efforts()->first();

        DB::commit();

        return new SessionResource($session);
    }
}
