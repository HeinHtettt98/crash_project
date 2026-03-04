<?php

namespace App\Models;

use App\Models\Deed_Comment;
use App\Models\Deed_Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deed extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'contract_no'               => 'encrypted',
        'register_year'             => 'encrypted',
        'volume'                    => 'encrypted',
        'stamp_fee'                 => 'encrypted',
        'register_fee'              => 'encrypted',
        'deposit_stubs'             => 'encrypted',
        'translation_fee'           => 'encrypted',
        'maintenance_fee'           => 'encrypted',
        'transportation_fee'        => 'encrypted',
        'commission_letter_fee'     => 'encrypted',
        'copy_fee'                  => 'encrypted',
        'cost'                      => 'encrypted',
        'remark'                    => 'encrypted',
        'fines'                     => 'encrypted',
        'modify_remarks'            => 'encrypted',
        //     'deed_no'                   => 'encrypted',

        'contractor1_name'          => 'encrypted',
        'contractor1_nric_no'       => 'encrypted',
        'no_of_contractors1'        => 'encrypted',
        'contractor1_father_name'   => 'encrypted',
        'contractor1_address'       => 'encrypted',

        'contractor2_name'          => 'encrypted',
        'contractor2_nric_no'       => 'encrypted',
        'no_of_contractors2'        => 'encrypted',
        'contractor2_father_name'   => 'encrypted',
        'contractor2_address'       => 'encrypted',

        'town'                      => 'encrypted',
        'quarter'                   => 'encrypted',
        'holding_no'                => 'encrypted',
        'land'                      => 'encrypted',
        'land_detail'               => 'encrypted',
        'land_no'                   => 'encrypted',
        'land_type'                 => 'encrypted',
        'area'                      => 'encrypted',
        'unit'                      => 'encrypted',
        'other_property'            => 'encrypted',

        'town_2'                    => 'encrypted',
        'quarter_2'                 => 'encrypted',
        'holding_no_2'              => 'encrypted',
        'land_2'                    => 'encrypted',
        'land_detail_2'             => 'encrypted',
        'land_no_2'                 => 'encrypted',
        'land_type_2'               => 'encrypted',
        'area_2'                    => 'encrypted',
        'unit_2'                    => 'encrypted',
        'other_property_2'          => 'encrypted',

        'original_form_id'          => 'encrypted',
        'original_data'             => 'encrypted',
        'amendment'                 => 'encrypted',
        'type_of_other_deed'        => 'encrypted',
        'file_path'                 => 'encrypted',
    ];


    public function deedType()
    {
        return $this->belongsTo(Deed_Type::class, 'deed_type_id');
    }
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function comments()
    {
        return $this->hasMany(Deed_Comment::class, 'deed_id');
    }
}
