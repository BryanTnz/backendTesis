<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use app\Models\User;


class Role extends Model
{
    use HasFactory;

    // Relación de uno a muchos
    // Un rol puede tener muchos usuarios
    public function users()
    {
        return $this->hasMany(User::class);
    }


}
