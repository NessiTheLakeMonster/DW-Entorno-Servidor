<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;

class Comentario extends Model
{
    use HasFactory;
    public $timestamps = false;   //Con esto Eloquent no maneja automáticamente created_at ni updated_at.

    function perteneceA()
    {
        return $this->belongsTo(Persona::class, 'DNI', 'DNI');
    }

    /**
     * Como se comprueba con tinker
     * $pers = Comentario::with('perteneceA')->get() 
     */
}
