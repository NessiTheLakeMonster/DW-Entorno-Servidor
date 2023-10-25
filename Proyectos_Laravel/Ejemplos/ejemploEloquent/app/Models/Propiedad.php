<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;
use App\Models\Coche;

class Propiedad extends Model
{
  use HasFactory;
  /*
      Enlaces de interés:
      https://styde.net/relaciones-con-el-orm-eloquent/
      https://www.laraveltip.com/filtrar-datos-de-tablas-relacionadas-con-eloquent/
      https://laravel.com/api/6.x/Illuminate/Database/Eloquent.html
     */

  //Aquí descomentamos todo porque la tabla tiene las características por defecto de Eloquent.
  protected $table = 'propiedades'; //Por defecto tomaría la tabla 'propiedads' que no existe.
  //protected $primaryKey = 'id';  //Por defecto el campo clave es 'id', entero y autonumérico. (Ya lo cumple).
  //public $incrementing = false; //Para indicarle que la clave no es autoincremental. (Ya lo cumple).
  //protected $keyType = 'string';   //Indicamos que la clave no es entera. (Ya lo cumple).
  public $timestamps = false;   //Con esto Eloquent no maneja automáticamente created_at ni updated_at.

  function infoCoche()
  {
    $this->hasMany(Coche::class, 'Matricula', 'Matricula');
  }

  function infoPersona()
  {
    $this->hasMany(Persona::class, 'DNI', 'DNI');
  }

  /**
   * Como se comprueba con tinker
   * $info = Propiedad::with(['infoCoche'],['infoPersona'])-> get()
   */
}
