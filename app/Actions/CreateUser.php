<?php
namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateUser
{
    use AsAction;

    public function handle(User $user)
    {
        $user->password = Hash::make($user->password);
        $user->save();
    }
}
