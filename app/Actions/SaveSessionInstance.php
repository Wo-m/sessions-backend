<?php

namespace App\Actions;

use App\Http\Resources\SessionInstanceResource;
use App\Models\Effort;
use App\Models\ExerciseInstance;
use App\Models\SessionInstance;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class SaveSessionInstance
{
    use AsAction;

    public function handle($data) {

        DB::beginTransaction();
        
        $sessionInstance = new SessionInstance();
        $sessionInstance->session_id = $data['session_id'];
        $sessionInstance->save();

        foreach($data['exerciseInstances'] as $instanceData) {
            $instance = new ExerciseInstance($instanceData);
            $instance->session_instance_id = $sessionInstance->id;
            $instance->save();
            foreach($instanceData['efforts'] as $effortData) {
                $effort = new Effort($effortData);
                $effort->exercise_instance_id = $instance->id;
                $effort->save();
            }
        }

        return new SessionInstanceResource($sessionInstance);
    }
}
