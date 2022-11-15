<?php

namespace App\Http\Controllers;

use App\Actions\SaveSessionInstance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstanceController
{
    public function saveSessionInstance(Request $request) {
        $validator = Validator::make($request->all(), [
            'session_id' => ['required', 'exists:sessions,id'],
            'exerciseInstances.*.exercise_id' =>['required', 'exists:exercises,id'],
            'exerciseInstances.*.efforts.*' => ['required'],
            'exerciseInstances.*.efforts.*.set' => ['required', 'distinct']
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $data = $validator->validate();
        return SaveSessionInstance::run($data);
    }
}
