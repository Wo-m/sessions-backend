<?php

namespace App\Http\Controllers;

use App\Actions\GetExerciseData;
use App\Actions\SaveSessionInstance;
use Illuminate\Http\Request;

class InstanceController extends AbstractController
{
    public function saveSessionInstance(Request $request) {
        $data = $this->validateRequest($request, [
            'session_id' => ['required', 'exists:sessions,id'],
            'exerciseInstances.*.exercise_id' =>['required', 'exists:exercises,id'],
            'exerciseInstances.*.efforts.*' => ['required'],
            'exerciseInstances.*.efforts.*.set' => ['required', 'distinct']
        ]);
        return SaveSessionInstance::run($data);
    }

    public function getExerciseData($exercise_id)
    {
        return GetExerciseData::run($exercise_id);
    }

    public function getExerciseInstances($exercise_id, $session_id = null)
    {
        return;
    }

}
