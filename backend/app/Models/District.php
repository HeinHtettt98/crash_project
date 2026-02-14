<?php

namespace App\Models;

use App\Models\State;
use App\Models\Township;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    function township()
    {
        return $this->hasMany(Township::class, 'district_id');
    }
}
