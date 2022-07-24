<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required | unique:users,email',
            'password' => 'required'
        ]);
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password'])
        ]);
        $token = $user->createToken('najwa')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }
    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', $validated['email'])->first();
        if(!$user | !Hash::check($validated['password'], $user->password)) {
            return response(['message' => 'Cannot logged in'], 401);

        }
        $token = $user->createToken('BangCoCeren')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);

    }
    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return ['message' => 'Logged out'];

    }
}
