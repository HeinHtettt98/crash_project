<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deed extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function deedType()
    {
        return $this->belongsTo(Deed_Type::class, 'deed_type_id');
    }
}
