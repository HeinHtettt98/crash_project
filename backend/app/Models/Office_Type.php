<?php

namespace App\Models;

use App\Models\Deed_Comment;
use App\Models\Office;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office_Type extends Model
{
    use HasFactory;

    function offices()
    {
        return $this->hasMany(Office::class, 'office_type_id');
    }

    function user()
    {
        return $this->hasMany(User::class, 'office_id');
    }

    public function sentComments()
    {
        return $this->hasMany(Deed_Comment::class, 'from_office_id');
    }
    public function receivedComments()
    {
        return $this->hasMany(Deed_Comment::class, 'to_office_id');
    }
    public function parent()
    {
        return $this->belongsTo(Office::class, 'parent_id');
    }
}
