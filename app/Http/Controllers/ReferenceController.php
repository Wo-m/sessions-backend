<?php

namespace App\Http\Controllers;

use App\Actions\SaveExercise;
use App\Actions\SaveSession;
use App\Http\Resources\SessionResource;
use App\Models\Effort;
use App\Models\ExerciseInstance;
use App\Models\Session;
use App\Models\SessionInstance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReferenceController
{

    public function saveExercise(Request $request) {

        // validate the user data
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        // create user model
        $data = $validator->validated();

        return SaveExercise::run($data['name']);
    }


    /***
     * $request contains the session name, and a base session instance
     **/
    public function saveSession(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'base' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $data = $validator->validate();
        return SaveSession::run($data);
    }
}
