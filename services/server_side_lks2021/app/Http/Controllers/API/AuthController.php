<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|min:3',
                'gender' => 'required',
                'birth_date' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
            ]);
            $validatedData['password'] = Hash::make($request->password);
            $user = User::create($validatedData);
            return response()->json([
                'message' => 'Success register user',
                'data' => $user,
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 403);
        }
    }
    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            if (Auth::attempt($credentials)) {
                $token = $request->user()->createToken($request->email);
                return response()->json([
                    'message' => 'Berhasil Login',
                    'token' => $token->plainTextToken,
                ], 202);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 403);
        }
    }
    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return response()->json([
                'message' => 'Success logout',
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'failed logout',
                'error' => $th->getMessage(),
            ], 403);
        }
    }
    public function huhu()
    {
        try {
            // $user = User::all();
            return response()->json([
                'data' => auth()->user()->tokens,
            ], 202);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 403);
        }
    }
}
