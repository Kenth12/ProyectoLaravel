<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable =['id_salas','bloque_sala','piso_sala','aula_sala','cantidad_equipos_sala'];
}
