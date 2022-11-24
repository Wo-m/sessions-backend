<?php

namespace App\Models\Base;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Base Exercise, used to build instances
 */
class ExerciseBase extends Model
{
    use HasFactory;

    public function efforts()
    {
        return $this->hasMany(EffortBase::class);
    }

    public function cardios()
    {
        return $this->hasOne(CardioBase::class);
    }

    public function exercise() {
        return $this->belongsTo(Exercise::class);
    }
}
