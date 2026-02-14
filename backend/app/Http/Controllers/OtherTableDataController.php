<?php

namespace App\Http\Controllers;

use App\Models\Deed_Type;
use App\Models\District;
use App\Models\Office;
use App\Models\State;
use App\Models\Township;
use Illuminate\Http\Request;

class OtherTableDataController extends Controller
{
       public function index()
    {
        return response()->json([
            'deed_types' => Deed_Type::select('id','name')->get(),
            'offices' => Office::select('id','name','office_type_id')->get(),
            'townships' => Township::select('id','name','state_id','district_id')->get(),
            'states' => State::select('id','name','state_type_id')->get(),
            'districts' => District::select('id','name','state_id')->get(),
        ]);
    }
}
