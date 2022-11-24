<?php

namespace App\Models;

use App\Models\Instance\ExerciseInstance;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exercise extends AbstractModel
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function exerciseInstances()
    {
        return $this->hasMany(ExerciseInstance::class);
    }
}
