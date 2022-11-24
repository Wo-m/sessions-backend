<?php

namespace App\Models\Instance;

use App\Models\AbstractModel;

class ProgramInstance extends AbstractModel
{
    public function instances()
    {
        return $this->hasMany(SessionInstance::class);
    }
}
