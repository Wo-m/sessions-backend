<?php

namespace App\Models\Instance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardio extends Model
{
    protected $fillable = [
        'time',
        'distance'
    ];
}
