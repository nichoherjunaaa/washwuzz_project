<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response([
                'message' => $validator->errors()
            ], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 401);
        }

        try {
            $token = $user->createToke(env('SECRET_TOKEN'))->plainTextToken;
            return response([
                'user' => $user,
                'token' => $token
            ], 200);
        } catch (\Exception $e) {
            return response([
                'message' => ['An error occurred while attempting to log in.']
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return response([
                'message' => ['User not found.']
            ], 401);
        }

        try {
            $user->currentAccessToken()->delete();
            return response([
                'message' => 'Success logout'
            ], 200);
        } catch (\Exception $e) {
            return response([
                'message' => ['An error occurred while attempting to log out.']
            ], 500);
        }
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'role' => 'in:client,admin'
        ]);

        try {
            if (empty($validated)) {
                return response()->json([
                    'message' => 'Failed to create user',
                    'error' => 'No validated data was provided.'
                ], 400);
            }

            $user = User::create([
                'firstname' => $validated['firstname'],
                'lastname' => $validated['lastname'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'phone_number' => $validated['phone_number'],
                'address' => $validated['address'],
                'role' => $validated['role']
            ]);

            if ($user === null) {
                return response()->json([
                    'message' => 'Failed to create user',
                    'error' => 'No user was created.'
                ], 500);
            }

            return response()->json($user, 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create user',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'sometimes|confirmed',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'role' => 'in:client,admin'
        ]);

        try {
            $user = User::findOrFail($id);
            $user->firstname = $validated['firstname'];
            $user->lastname = $validated['lastname'];
            $user->email = $validated['email'];
            if ($validated['password']) {
                $user->password = Hash::make($validated['password']);
            }
            $user->phone_number = $validated['phone_number'];
            $user->address = $validated['address'];
            $user->role = $validated['role'];
            $user->save();
            return response()->json($user);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update user',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json([
                'message' => 'Success delete user'
            ], 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to delete user',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}

