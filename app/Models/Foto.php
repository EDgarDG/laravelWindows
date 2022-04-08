<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    // CREACION DEL FILLABLE, PROTECCION DE LOS CAMPOS
    protected $fillable=['ruta_foto'];
}
