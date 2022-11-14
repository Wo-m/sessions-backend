<?php

namespace App\Http\Controllers;

use App\Actions\SaveExercise;
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

}
