<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseInstance extends AbstractModel
{
    use HasFactory;

    protected $fillable = [
        'exercise_id'
    ];

    public function efforts()
    {
        return $this->hasMany(Effort::class);
    }

    public function exercise() {
        return $this->belongsTo(Exercise::class);
    }
}
