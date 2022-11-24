<?php

namespace App\Models\Reference;

use App\Models\AbstractModel;
use App\Models\Instance\ExerciseInstance;

class Exercise extends AbstractModel
{
    protected $fillable = [
        'name'
    ];

    public function exerciseInstances()
    {
        return $this->hasMany(ExerciseInstance::class);
    }
}
