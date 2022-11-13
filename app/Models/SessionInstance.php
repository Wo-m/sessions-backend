<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionInstance extends Model
{
    use HasFactory;

    public function exerciseInstances()
    {
        return $this->hasMany('ExerciseInstance');
    }
}
