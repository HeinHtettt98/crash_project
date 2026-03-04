<?php

namespace App\Models;

use App\Models\Deed;
use App\Models\Office_Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deed_Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'deed_id',
        'from_user_id',
        'from_office_id',
        'message',
        'to_user_id',
        'to_office_id',
    ];
    protected $casts = [
        'message' => 'array',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }

    public function fromOffice()
    {
        return $this->belongsTo(Office_Type::class, 'from_office_id');
    }

    public function toOffice()
    {
        return $this->belongsTo(Office_Type::class, 'to_office_id');
    }


    public function deed()
    {
        return $this->belongsTo(Deed::class, 'deed_id');
    }
}
