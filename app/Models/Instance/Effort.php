<?php

namespace App\Models\Instance;

use App\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Effort extends AbstractModel
{
    protected $fillable = [
        'set',
        'reps',
        'weight'
    ];
}
