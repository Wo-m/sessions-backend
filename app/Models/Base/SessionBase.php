<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Base Session, used to build instances
 */
class SessionBase extends Model
{
    use HasFactory;

    public function exerciseBases()
    {
        return $this->hasMany(ExerciseBase::class);
    }
}
