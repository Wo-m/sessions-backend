<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

class AbstractController extends Controller
{
    /*
     * validate request with rules and return validated data
     */
    public function validateRequest($request, array $rules) {
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        return $validator->validate();
    }
}
