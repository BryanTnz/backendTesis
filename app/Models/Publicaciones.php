<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use app\Models\User;

class Publicaciones extends Model
{
    use HasFactory;

// Relación de uno a muchos
// Un reporte le pertenece a un usuario
public function user()
{
    return $this->belongsTo(User::class);
}
protected $fillable = [
    'path',
];

}














