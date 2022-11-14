<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effort extends AbstractModel
{
    use HasFactory;

    protected $fillable = [
        'set',
        'reps',
        'weight'
    ];
}
