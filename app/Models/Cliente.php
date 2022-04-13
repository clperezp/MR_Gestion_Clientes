<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [ //  Para habilitar la introduccion de datos.
        "bd_nombre",
        "bd_apellido",
        "bd_direccion",
        "bd_email",
        "bd_edad"];
}
