<?php

namespace App\Models\Instance;

use App\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Effort extends AbstractModel
{
    use HasFactory;

    protected $fillable = [
        'set',
        'reps',
        'weight'
    ];
}
