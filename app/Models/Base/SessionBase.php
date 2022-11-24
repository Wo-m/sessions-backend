<?php

namespace App\Models\Base;

use App\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Base Session, used to build instances
 */
class SessionBase extends AbstractModel
{
    public function exerciseBases()
    {
        return $this->hasMany(ExerciseBase::class);
    }
}
