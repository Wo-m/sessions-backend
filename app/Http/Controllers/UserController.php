<?php
namespace App\Http\Controllers;

use App\Actions\CreateUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function createUser(Request $request) {
        $user = new User();
        $user->forceFill($request->input('user'));
        return CreateUser::run($user);
    }
}

