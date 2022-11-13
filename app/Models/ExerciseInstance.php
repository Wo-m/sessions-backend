<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseInstance extends Model
{
    use HasFactory;

    public function efforts()
    {
        return $this->hasMany('effort');
    }
}
