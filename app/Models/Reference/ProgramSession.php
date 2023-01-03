<?php

namespace App\Models\Reference;

use App\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramSession extends AbstractModel
{
    public function session()
    {
        return $this->hasOne(Session::class);
    }
}
