<?php

namespace App\Models\Base;

use App\Models\AbstractModel;
use App\Models\Reference\Exercise;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Base Exercise, used to build instances
 */
class ExerciseBase extends AbstractModel
{
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
