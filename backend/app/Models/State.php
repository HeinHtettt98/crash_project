<?php

namespace App\Models;

use App\Models\District;
use App\Models\State_Type;
use App\Models\Township;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    function state_type()
    {
        return $this->belongsTo(State_Type::class, 'state_type_id');
    }

    function district()
    {
        return $this->hasMany(District::class, 'state_id');
    }

    function township()
    {
        return $this->hasMany(Township::class, 'state_id');
    }

}
