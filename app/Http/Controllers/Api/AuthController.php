<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

use App\Models\User;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //  REGISTRO DE NUEVO USUARIO
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = User::create(($request->validated()));

        // GENERAR TOKEN DE AUTENTICACION PARA EL USUARIO
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Usuario registrado exitosamente',
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 201);
    }
    //INICIO DE SESION DE SESION
    public function login(LoginRequest $request): JsonResponse
    {
        $user = User::where('email', $request->email)->first();

        //VALIDAMOS LA CONTRASEÑA USANDO HASH::CHECK
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Las credenciales proporcionadas son incorrectas.'],
            ]);
        }

        // GENERAR TOKEN DE AUTENTICACION PARA EL USUARIO
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Inicio de sesión exitoso',
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    // OBTENER DATOS DEL USUARIO AUTENTICADO
    public function me(Request $request): JsonResponse
    {
        return response()->json($request->user());
    }

    // CERRAR SESION DEL USUARIO (RENOVAR EL TOKEN)
    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Sesión cerrada exitosamente',
        ]);
    }
} 