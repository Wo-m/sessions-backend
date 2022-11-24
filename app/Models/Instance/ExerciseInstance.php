<?php

namespace App\Models\Instance;

use App\Models\AbstractModel;
use App\Models\Reference\Exercise;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Instance of an exercise
 * Either maps to multiple efforts
 * or multiple cardios (multiple for intervals)
 * (cannot be both)
 */
class ExerciseInstance extends AbstractModel
{
    protected $fillable = [
        'exercise_id'
    ];

    public function efforts()
    {
        return $this->hasMany(Effort::class);
    }

    public function cardios()
    {
        return $this->hasMany(Cardio::class);
    }

    public function exercise() {
        return $this->belongsTo(Exercise::class);
    }
}
