<?php
namespace App\Http\Controllers;

use App\Actions\AuthenticateUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller {
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        return AuthenticateUser::run($credentials);
    }
}
