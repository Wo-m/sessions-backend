<?php

namespace App\Http\Controllers;

use App\Actions\GetBaseSession;
use App\Actions\SaveExercise;
use App\Actions\SaveSession;
use Illuminate\Http\Request;

class ReferenceController extends AbstractController
{

    public function saveExercise(Request $request) {
        $data = $this->validateRequest($request, [
            'name' => ['required', 'max:255'],
        ]);

        return SaveExercise::run($data['name']);
    }


    /***
     * $request contains the session name, and a base session instance
     **/
    public function saveSession(Request $request) {
        $data = $this->validateRequest($request, [
            'name' => ['required', 'max:255'],
            'base' => 'required',
        ]);

        return SaveSession::run($data);
    }

    public function getBaseSession($id) {
        return GetBaseSession::run($id);
    }
}
