<?php
namespace App\Http\Controllers;

use App\Actions\CreateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends AbstractController {
    public function createUser(Request $request) {
        // create user model
        $data = $this->validateRequest($request, [
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required','unique:users', 'max:255', 'email'],
            'password' => ['required', 'max:255'],
        ]);
        $user = new User($data);

        // action
        return CreateUser::run($user);
    }
}

