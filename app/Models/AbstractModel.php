<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Wrapper for model
 */
class AbstractModel extends Model
{
    use HasFactory;

    // adds inserted by auditing
    public function save(array $options = []) {
        $this->inserted_by = (int)Auth::id();
        parent::save($options);
    }
}
