<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $auth = Auth::user();
            //return $auth;
            $success['token'] =  $auth->createToken('LaravelSanctumAuth')->plainTextToken;
            $success['name'] =  $auth->name;

            return response()->json(["success" => true, "data" => $success, "message" => "User logged-in!"]);
        } else {
            return response()->json("Unauthorised", 204);
        }
    }

    public function register(Request $request)
    {
        $messages = [
            'unique' => 'Ese correo ya existe en la bd',
            'email' => 'El campo no se ajusta a un correo estándar',
            'same' => 'Los campos :password y :confirm_password deben coincidir',
            'max' => 'El campo se excede del tamaño máximo',
            'between' => 'El campo :edad no está entre :18,100'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:users', // Con esto evitamos que ocurra el error de la clave duplicada.
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'edad' => 'numeric|integer|between:18,90'
        ], $messages);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 202);
        }

        $input = $request->all();

        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('LaravelSanctumAuth')->plainTextToken;
        $success['name'] =  $user->name;

        return response()->json(["success" => true, "data" => $success, "message" => "User successfully registered!"]);
    }

    /**
     * Por defecto los tokens de Sanctum no expiran. Se puede modificar esto añadiendo una cantidad en minutos a la variable 'expiration' en el archivo de config/sanctum.php.
     */
    public function logout(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $cantidad = Auth::user()->tokens()->delete();
            return response()->json(["success" => true, "message" => "Tokens Revoked: " . $cantidad], 200);
        } else {
            return response()->json("Unauthorised", 204);
        }
    }
}
