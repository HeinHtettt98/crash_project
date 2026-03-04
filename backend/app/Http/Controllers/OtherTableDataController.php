<?php

namespace App\Http\Controllers;

use App\Models\Deed_Type;
use App\Models\District;
use App\Models\Office;
use App\Models\Role;
use App\Models\State;
use App\Models\Township;
use App\Models\Deed_Setting;
use App\Services\UserHierarchyService;
use Illuminate\Http\Request;

class OtherTableDataController extends Controller
{
    public function index(UserHierarchyService $userHierarchyService)
    {
        return response()->json([
            'deed_types' => Deed_Type::select('id', 'name')->get(),
            'offices' => Office::select('id', 'name', 'office_type_id')->get(),
            'townships' => Township::select('id', 'name', 'state_id', 'district_id')->get(),
            'states' => State::select('id', 'name', 'state_type_id')->get(),
            'roles' => Role::select('id', 'name')->get(),
            'districts' => District::select('id', 'name', 'state_id')->get(),
            'deed_settings' => Deed_Setting::select('id', 'deed_type_id', 'copy_fee', 'register_fee', 'stamp_fee', 'maintenance_fee', 'commission_letter_fee')->get(),
            // 'user' => $userHierarchyService->getVisibleUsers(auth()->user())
        ], 200);
    }
    public function usersInformations(UserHierarchyService $service)
    {
        $users = $service->getVisibleUsers(auth()->user());

        return response()->json($users);
    }
}
