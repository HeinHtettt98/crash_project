<?php

namespace App\Services;

use App\Models\User;

class UserHierarchyService
{
    public function getVisibleUsers(User $authUser)
    {
        if ($authUser->role_id == 4) {
            return User::where('office_id', $authUser->office_id)
                ->where('role_id', 3)
                ->get();
        }

        if ($authUser->role_id == 3) {
            return User::where(function ($query) use ($authUser) {
                $query->where(function ($q) use ($authUser) {
                    $q->where('office_id', $authUser->office_id)
                        ->where('role_id', 2);
                })->orWhere(function ($q) use ($authUser) {
                    $q->where('office_id', optional($authUser->office->parent)->id)
                        ->where('role_id', 3);
                });
            })->get();
        }

        if ($authUser->role_id == 2) {
            return User::where('office_id', optional($authUser->office->parent)->id)
                ->where('role_id', 3)
                ->get();
        }

        return collect();
    }
}
