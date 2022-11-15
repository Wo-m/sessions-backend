<?php

namespace App\Http\Controllers;

use App\Actions\SaveSessionInstance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstanceController
{
    public function saveSessionInstance(Request $request) {
        // TODO validate request
        //  ensure session_id exists
        //  ensure exercise_id exists
        //  ensure efforts set values count correctly

        $validator = Validator::make($request->all(), [
            'session_id' => ['required'],
            'exerciseInstances' =>['required']
        ]);

        $data = $validator->validate();
        return SaveSessionInstance::run($data);
    }
}
