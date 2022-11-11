<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * POST /api/register
     */
    public function register(Request $request) : Object {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8']
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        return response()->json([
            'message' => 'user created successfully.',
            'data' => $user
        ]);
    }

    /**
     * POST /api/login
     */
    public function login(Request $request) : Object {
        $validated = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'string', 'min:8']
        ]);

        $user = User::findByEmail($validated['email']);
        if (!$user) {
            return response()->json([
                'message' => 'email or password is wrong.'
            ], 401);
        } else if (Hash::check($validated['password'], $user['password'])) {
            return response()->json([
                'message' => 'logged in.',
                'token' => $user->createToken('auth_token')->plainTextToken
            ]);
        }        
        
        return response()->json([
            'message' => 'email or password is wrong.'
        ], 401);
    }
}
