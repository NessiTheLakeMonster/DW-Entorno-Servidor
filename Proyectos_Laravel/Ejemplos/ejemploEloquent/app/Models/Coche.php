<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

    //protected $table = 'coches'; //Por defecto tomaría la tabla 'coches'.
    protected $primaryKey = 'Matricula';  //Por defecto el campo clave es 'id', entero y autonumérico.
    public $incrementing = false; //Para indicarle que la clave no es autoincremental.
    protected $keyType = 'string';   //Indicamos que la clave no es entera.
    public $timestamps = false;   //Con esto Eloquent no maneja automáticamente created_at ni updated_at.

}
