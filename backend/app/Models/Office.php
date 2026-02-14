<?php

namespace App\Models;

use App\Models\Office_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    function office_type()
    {
        return $this->belongsTo(Office_Type::class, 'office_type_id');
    }
}
