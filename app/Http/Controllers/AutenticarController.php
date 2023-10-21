<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Http\Requests\CerrarSesionRequest;
use App\Http\Requests\AccesoRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Admin;
use App\Models\Dreamer;
use App\Models\Group;
use Illuminate\Http\Request;


class AutenticarController extends Controller
{
    public function registro(RegistroRequest $request)
    {
        $admin = new Admin();
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();
        $admin->dreamers()->attach($request->dreamers_id);

        // $admin->dreamers()->attach($request->dreamers_id);

        return response()->json([
            'res' => true,
            'msg' => 'Admin registrado correctamente'
        ], 200);
    }

    public function acceso(AccesoRequest $request)
    {
        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            throw ValidationException::withMessages([
                'msg' => ['Las credenciales introducidas son incorrectas.'],
            ]);
        }

        // Generar el token
        $token = $admin->createToken($request->email)->plainTextToken;

        return response()->json([
            'res' => true,
            'token' => $token
        ],200);
    }

    public function cerrarSesion(request $request){
        $request->admin()->currentAccessToken()->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Sesión cerrada correctamente'
        ],200);
    }
}

