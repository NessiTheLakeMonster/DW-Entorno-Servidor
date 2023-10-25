<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comentario;

class Persona extends Model
{
    use HasFactory;

    //protected $table = 'personas'; //Por defecto tomaría la tabla 'personas'.
    protected $primaryKey = 'DNI';  //Por defecto el campo clave es 'id', entero y autonumérico.
    public $incrementing = false; //Para indicarle que la clave no es autoincremental.
    protected $keyType = 'string';   //Indicamos que la clave no es entera.
    public $timestamps = false;   //Con esto Eloquent no maneja automáticamente created_at ni updated_at.
    //protected $fillable = ['nombre', 'apellido', 'edad', 'direccion'];
    //protected $hidden = ['id'];

    function comentariosDe()
    {
        // Primero foreign key, luego local key
        return $this->hasMany(Comentario::class, 'DNI', 'DNI');
    }

    /**
     * Como se comprueba con tinker
     * $com = Persona::with('comentariosDe')->get()   
     */
}
