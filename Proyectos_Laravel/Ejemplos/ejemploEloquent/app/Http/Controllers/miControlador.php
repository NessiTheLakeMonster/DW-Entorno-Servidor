<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona; //--> Añadimos el espacio de direcciones de la clase Persona.
use App\Models\Propiedad;
use App\Models\Coche;
use App\Models\Comentario;

class miControlador extends Controller
{
    public function verPersonas()
    {
        $pers = Persona::all();

        return response()->json($pers, 200);
    }

    //------------------------------------------------------------------------
    public function probarFind()
    {
        $pers = Persona::find('4D');
        return response()->json($pers, 200);
    }

    //------------------------------------------------------------------------
    public function buscarPersona($dni)
    {
        //Opción A.
        //$pers = Persona::where('edad', '>', 18)->get();
        //Opción B.
        $pers = Persona::find($dni);

        return response()->json($pers, 200);
    }

    //------------------------------------------------------------------------
    public function insertarPersonas(Request $req)
    {
        $pe = new Persona;

        $pe->DNI = $req->get('DNI');
        $pe->Nombre = $req->get('Nombre');
        $pe->Tfno = $req->get('Tfno');
        $pe->edad = $req->get('edad');
        //return response()->json($pe,200);
        $mensaje = 'Inserción ok';
        try {
            $pe->save();
        } catch (\Exception $e) {
            $mensaje = 'Clave duplicada';
        }
        return response()->json(['mens' => $mensaje], 200);
    }

    //------------------------------------------------------------------------
    public function vermayores()
    {
        $pers = Persona::where('edad', '>', 18)
            ->orderBy('Nombre', 'asc')
            ->get();

        return response()->json($pers, 200);
    }
}
