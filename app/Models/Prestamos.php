<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = ['id_usuario','id_libro','fecha_prestamo','fecha_devolucion'];

}
