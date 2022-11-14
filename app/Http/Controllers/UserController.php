<?php
namespace App\Http\Controllers;

use App\Actions\CreateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {
    public function createUser(Request $request) {
        // validate the user data
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required','unique:users', 'max:255', 'email'],
            'password' => ['required', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        // create user model
        $data = $validator->validated();
        $user = new User($data);

        // action
        return CreateUser::run($user);
    }
}

