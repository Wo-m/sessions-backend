<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionInstance extends AbstractModel
{
    use HasFactory;

    protected $fillable = [
        'session_id'
    ];

    public function exerciseInstances()
    {
        return $this->hasMany(ExerciseInstance::class);
    }
}
