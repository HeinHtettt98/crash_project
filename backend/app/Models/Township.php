<?php

namespace App\Models;

use App\Models\District;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    use HasFactory;
    function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
