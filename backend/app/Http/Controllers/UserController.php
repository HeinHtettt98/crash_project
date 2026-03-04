<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function userDraft(User $user)
    {
        return response()->json([
            'user' => $user->deed()   // relation
                ->with('deedType')   // ✅ eager load correctly
                ->whereDoesntHave('comments')
                ->latest()
                ->get()
        ], 200);
    }
    function register(UserRegisterRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'office_id' => $data['office_id'],
        ]);
        return response()->json([
            'user' => $user
        ], 201);
        //   Auth::login($user);  auto-login after register
    }

    function login(UserLoginRequest $request)
    {
        $credentials = $request->validated();
        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        $request->session()->regenerate();

        return response()->json([
            'user' => Auth::user(),
        ], 200);
    }

    function logout(Request $request)
    {
        // Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Logged out successfully'], 200);
    }
}
