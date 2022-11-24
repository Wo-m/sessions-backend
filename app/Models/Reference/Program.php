<?php

namespace App\Models\Reference;

use App\Models\Instance\ProgramInstance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    // Used to create instances
    public function sessions()
    {
        return $this->hasMany(ProgramSession::class);
    }

    public function instances()
    {
        return $this->hasMany(ProgramInstance::class);
    }
}
