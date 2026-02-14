<?php

namespace App\Models;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office_Type extends Model
{
    use HasFactory;

    function offices()
    {
        return $this->hasMany(Office::class, 'office_type_id');
    }
}
