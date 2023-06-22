<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use app\Models\Registro;

class Calificacion extends Model
{
    use HasFactory;
    // Relación de uno a muchos
    // Un registro le pertenece a una calificacion
    public function user()
    {
        return $this->belongsTo(Registro::class);
    }
}
