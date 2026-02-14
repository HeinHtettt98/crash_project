<?php

namespace App\Models;

use App\Models\Deed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deed_Type extends Model
{
    use HasFactory;

    public function deed()
    {
        return $this->hasMany(Deed::class, 'deed_type_id');
    }
}
