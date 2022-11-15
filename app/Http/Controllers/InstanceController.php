<?php

namespace App\Http\Controllers;

use App\Actions\SaveSessionInstance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
}
