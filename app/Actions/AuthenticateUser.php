<?php
namespace App\Actions;

use Illuminate\Support\Facades\Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AuthenticateUser {
    use asAction;

    public function handle(array $credentials) {
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $token = $user->createToken('api_token');

            return ['token' => $token->plainTextToken, 'id' => $user->getId()];
        }
        abort(401);
    }
}
