<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class ValidateApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $id = (int)$request->header('user_id');
        $hashedToken = $request->header('x_api_token');
        $token = PersonalAccessToken::findToken($hashedToken);
        if ($token == null) {
            abort(401);
        }

        $user = $token->tokenable;
        if ($user->id !== $id) {
            abort(401);
        }

        return $next($request);
    }
}
