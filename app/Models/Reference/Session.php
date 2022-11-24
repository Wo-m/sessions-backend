<?php

namespace App\Models\Reference;

use App\Models\AbstractModel;
use App\Models\Base\SessionBase;
use App\Models\Instance\SessionInstance;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session extends AbstractModel
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // Instances of completed sessions
    public function instances()
    {
        return $this->hasMany(SessionInstance::class);
    }

    // The actual session info
    // used to init new session instances
    public function base()
    {
        return $this->hasOne(SessionBase::class);
    }
}
