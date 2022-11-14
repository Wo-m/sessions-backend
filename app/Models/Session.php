<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Session extends AbstractModel
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function sessionInstances()
    {
        return $this->hasMany(SessionInstance::class);
    }

}
