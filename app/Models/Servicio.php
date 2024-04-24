<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';  // Especifica el nombre de la tabla si no sigue las convenciones de Laravel
    public $timestamps = false; 
    protected $fillable = ['id', 'tipo_servicio'];  // Atributos que pueden ser asignados masivamente

    public function servicioHorarios()
    {
        return $this->hasMany(ServicioHorario::class, 'id_servicio');
    }

}
