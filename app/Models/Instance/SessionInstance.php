<?php

namespace App\Models\Instance;

use App\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
