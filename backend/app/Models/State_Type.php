<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State_Type extends Model
{
    use HasFactory;
    function state()
    {
        return $this->hasMany(State::class, 'state_type_id');
    }
}
