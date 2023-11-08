<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parte;

class ParteController extends Controller
{
    public function index()
    {
        $partes = Parte::all();
        return response()->json($partes, 200);
    }


    public function store(Request $request)
    {
        $input = $request->all();

        /* $validator = Validator::make($input, [
            'nombre' => 'required',
            'causa' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json("Error en los datos", 204);
        } */
        
        $parte = Parte::create($input);
        return response()->json(["success" => true, "data" => $parte, "message" => "Created"]);
    }


    public function show($id)
    {
        $parte = Parte::find($id);
        if (is_null($parte)) {
            return response()->json("Parte no encontrado", 202);
        }
        return response()->json(["success" => true, "data" => $parte, "message" => "Retrieved"]);
    }


    public function update($id, Request $request)
    {
        $input = $request->all();

        /* $validator = Validator::make($input, [
            'nombre' => 'required',
            'causa' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json("Error en los datos", 204);
        } */
        
        $parte = Parte::find($id);
        $parte->nombre = $input['nombre'];
        $parte->causa = $input['causa'];
        $parte->save();

        return response()->json(["success" => true, "data" => $parte, "message" => "Updated"]);
    }

    public function destroy($id)
    {
        $parte = Parte::find($id);
        $parte->delete();
        return response()->json(["success" => true, "data" => $parte, "message" => "Deleted"]);
    }
}
